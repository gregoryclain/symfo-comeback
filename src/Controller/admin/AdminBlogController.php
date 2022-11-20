<?php
namespace App\Controller\admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminBlogController extends AbstractController
{
    #[Route('/admin/')]
    public function adminIndex(): Response
    {
        return $this->render('/back/index.html.twig',[]);
    }

    #[Route('/admin/blog/')]
    public function adminBlogList(): Response
    {
        return $this->render('/back/blog/list.html.twig',[]);
    }

    #[Route('/admin/blog/edit/xx')]
    public function adminBlogEdit(): Response
    {
        return $this->render('/back/blog/edit.html.twig',[]);
    }
}