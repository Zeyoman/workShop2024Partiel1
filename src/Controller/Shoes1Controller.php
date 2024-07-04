<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes1Controller extends AbstractController
{
    #[Route('/shoes1', name: 'app_shoes1')]
    public function index(): Response
    {
        return $this->render('shoes1/index.html.twig', [
            'controller_name' => 'Shoes1Controller',
        ]);
    }
}
