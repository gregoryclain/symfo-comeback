<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    #[Route('/')]
    public function blogList(): Response
    {
        return new Response(
            '<html lang="fr"><body>Test affichage</body></html>'
        );
    }
}