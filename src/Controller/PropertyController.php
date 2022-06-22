<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{
    #[Route('/propriete', name: 'propriete')]
    public function index(): Response
    {
        return $this->render('propriete/index.html.twig', [
            'current_menu' => 'propriete'
        ]);
    }

    #[Route('/propriete/logement1', name: 'logement1')]
    public function logement1(): Response
    {
        return $this->render('propriete/logement1.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

}