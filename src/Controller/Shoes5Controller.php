<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes5Controller extends AbstractController
{
    #[Route('/shoes5', name: 'app_shoes5')]
    public function index(): Response
    {
        return $this->render('shoes5/index.html.twig', [
            'controller_name' => 'Shoes5Controller',
        ]);
    }
}
