<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Helper\FormErrorHelper;
use App\Helper\StringFileSizeHelper;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Util\ServerParams;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/", name="contact_form")
     */
    public function index(Request $request, SluggerInterface $slugger, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        $params = new ServerParams();
        if ($params->hasPostMaxSizeBeenExceeded()) {
            $message = sprintf('La quantité de données envoyées (%s) dépasse celle autorisée par le serveur (%s)',
                StringFileSizeHelper::humanReadable($params->getContentLength()),
                StringFileSizeHelper::humanReadable($params->getPostMaxSize())
            );
            $form->addError(new FormError($message));
            return $this->json([
                'success' => false,
                'errors' => ['contact_form' => ['message' => $message]],
                'upload' => [
                    'success' => false,
                    'message' => ''
                ]
            ]);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Contact $contact */
            $contact = $form->getData();
            /** @var UploadedFile $videoFile */
            $videoFile = $form->get('video')->getData();

            if ($videoFile) {
                $originalFilename = pathinfo($videoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug(
                    mb_strtolower(
                        $contact->getLastname() . ' ' .
                        $contact->getFirstname() . ' ' .
                        $contact->getCompanyName() . ' '
                    ) . $originalFilename
                );
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $videoFile->guessExtension();
                try {
                    $videoFile->move(
                        $this->getParameter('video_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $form->addError(new FormError($e->getMessage()));
                }
                $contact->setVideoFilename($newFilename);
            }

            if (\count($form->getErrors(true)) === 0) {
                try {
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($contact);
                    $entityManager->flush();
                } catch (\Exception $e) {
                    $form->addError(new FormError($e->getMessage()));
                }
            }
            if (\count($form->getErrors(true)) === 0) {
                $email = (new TemplatedEmail())
                    ->from(new Address(
                        $this->getParameter('email_from_address'),
                        $this->getParameter('email_from_name')
                    ))
                    ->to(new Address(
                        $contact->getEmail(),
                        $contact->getFirstname() . ' ' . $contact->getLastname()
                    ))
                    ->subject($this->getParameter('email_subject'))
                    ->htmlTemplate('emails/confirm.html.twig')
                    ->context([]);

                $mailer->send($email);

                if ($request->isXmlHttpRequest()) {
                    return $this->json([
                        'success' => true,
                        'upload' => [
                            'success' => true,
                            'message' => 'Fichier téléchargé avec succès.'
                        ]
                    ]);
                }
                return $this->redirectToRoute('confirmation_page');
            }
        }

        if ($form->isSubmitted() && !$form->isValid() && $request->isXmlHttpRequest()) {
            $errors = FormErrorHelper::getAllErrorMessages($form);
            return $this->json([
                'success' => false,
                'errors' => FormErrorHelper::format($errors),
                'upload' => [
                    'success' => false,
                    'message' => $form->get('video')->getErrors()
                ]
            ]);
        }

        return $this->renderForm('contact_form/index.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/confirmation", name="confirmation_page")
     * @return Response
     */
    public function confirmationPage(): Response
    {
        return $this->render('contact_form/confirm.html.twig');
    }
}
