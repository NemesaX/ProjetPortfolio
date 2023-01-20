<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VincentController extends AbstractController
{
    #[Route('/site', name: 'app_site')]
    public function site(): Response
    {
        return $this->render('vincent/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }

    #[Route('/Accueil', name: 'app_Accueil')]
    public function Accueil(): Response
    {
        return $this->render('vincent/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('vincent/cv.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }

    #[Route('/Blog', name: 'app_Blog')]
    public function Blog(): Response
    {
        return $this->render('vincent/Blog.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }

    #[Route('/Portfolio', name: 'app_Portfolio')]
    public function Portfolio(): Response
    {
        return $this->render('vincent/Portfolio.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}

