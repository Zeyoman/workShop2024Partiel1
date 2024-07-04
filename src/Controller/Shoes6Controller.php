<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes6Controller extends AbstractController
{
    #[Route('/shoes6', name: 'app_shoes6')]
    public function index(): Response
    {
        return $this->render('shoes6/index.html.twig', [
            'controller_name' => 'Shoes6Controller',
        ]);
    }
}
