<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LacombeNathanController extends AbstractController
{
    #[Route('/lacombe', name: 'app_lacombe')]
    public function index(): Response
    {
        return $this->render('lacombe_nathan/index.html.twig', [
            'controller_name' => 'LacombeNathanController',
        ]);
    }
}
