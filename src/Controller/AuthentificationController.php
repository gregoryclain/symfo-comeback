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
}