<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes3Controller extends AbstractController
{
    #[Route('/shoes3', name: 'app_shoes3')]
    public function index(): Response
    {
        return $this->render('shoes3/index.html.twig', [
            'controller_name' => 'Shoes3Controller',
        ]);
    }
}
