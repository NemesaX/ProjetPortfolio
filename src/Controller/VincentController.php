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
}
{
    #[Route('/Site', name: 'app_vincent')]
    public function base(): Response
    {
        return $this->render('templates/base.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}