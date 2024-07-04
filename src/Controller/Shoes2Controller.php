<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes2Controller extends AbstractController
{
    #[Route('/shoes2', name: 'app_shoes2')]
    public function index(): Response
    {
        return $this->render('shoes2/index.html.twig', [
            'controller_name' => 'Shoes2Controller',
        ]);
    }
}
