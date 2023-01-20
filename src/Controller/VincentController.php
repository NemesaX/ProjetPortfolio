<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VincentController extends AbstractController
{
    #[Route('/site', name: 'app_site')]
    public function index(): Response
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('/site/cv.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}

