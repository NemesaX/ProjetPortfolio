<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VincentController extends AbstractController
{
    #[Route('/Site', name: 'app_Site')]
    public function index(): Response
    {
        return $this->render('Site/index.html.twig', [
            'controller_name' => 'VincentController',
        ]);
    }
}

