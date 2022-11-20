<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthentificationController extends AbstractController
{
    #[Route('/login')]
    public function blogList(): Response
    {
        return $this->render('login.html.twig',[]);
    }

    #[Route('/register')]
    public function contact(): Response
    {
        return $this->render('register.html.twig',[]);
    }
}