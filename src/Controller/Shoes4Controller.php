<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Shoes4Controller extends AbstractController
{
    #[Route('/shoes4', name: 'app_shoes4')]
    public function index(): Response
    {
        return $this->render('shoes4/index.html.twig', [
            'controller_name' => 'Shoes4Controller',
        ]);
    }
}
