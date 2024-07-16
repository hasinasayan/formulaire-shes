<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\IsTrue;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname')
            ->add('firstname')
            ->add('email')
            ->add('phoneNumber')
            ->add('companyName')
            ->add('companyConcept')
            ->add('companyWebsite')
            ->add('companyComposition')
            ->add('companyCreationDate', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
                'attr' => [
                    'min' => '2017-01-01',
                    'max' => '2024-03-01',
                ]
            ])
            ->add('companyLocation')
            ->add('hasInstagram',ChoiceType::class, [
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('instagramAccountId')
            ->add('problematic')
            ->add('motivation')
            ->add('accompagnementRSE')
            ->add('parcours')
            ->add('pratiqueResponsable')
            ->add('video', FileType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '250M',
                        'mimeTypes' => ['video/*'],
                        'mimeTypesMessage' => 'Le format de la vidéo est invalide',
                        'maxSizeMessage' => 'Le fichier est trop volumineux. La taille maximum autorisée est de {{ limit }} {{ suffix }}',
                        'uploadIniSizeErrorMessage' => 'Le fichier est trop volumineux. La taille maximum autorisée par le serveur est de {{ limit }} {{ suffix }}'
                    ])
                ]
            ])
            ->add('mentor1')
            ->add('mentor2')
            ->add('mentor3')
            ->add('mentor4')
            ->add('mentor5')
            ->add('futureNews')
            ->add('optinReglement', CheckboxType::class, [
                'mapped' => false,
                'constraints' => new IsTrue(['message' => 'Veuillez accepter les conditions de participation du règlement'])
            ])
            ->add('optinPhoneCall', CheckboxType::class, [
                'required' => false,
            ])
            ->add('optinEmailSMS', CheckboxType::class, [
                'required' => false,
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'attr' => ['id' => 'contact-information']
        ]);
    }
}
