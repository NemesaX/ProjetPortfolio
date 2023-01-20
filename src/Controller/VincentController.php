<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VincentController extends AbstractController
{
    #[Route('/Site', name: 'app_vincent')]
    public function index(): Response
    {
        return $this->render('vincent/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
    #[Route('/CV', name: 'app_CV')]
    public function CV(): Response
    {
        return $this->render('/vincent/CV.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}

