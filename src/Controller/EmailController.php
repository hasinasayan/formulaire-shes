<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    /**
     * @Route("/view/email", name="email_online")
     */
    public function showEmailAsWebpage()
    {
        return $this->render('emails/confirm.html.twig');
    }
}