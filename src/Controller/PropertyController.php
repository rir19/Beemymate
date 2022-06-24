<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{
    /**
    * @IsGranted("ROLE_USER")
    */
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

    #[Route('/propriete/logement2', name: 'logement2')]
    public function logement2(): Response
    {
        return $this->render('propriete/logement2.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    #[Route('/propriete/logement3', name: 'logement3')]
    public function logement3(): Response
    {
        return $this->render('propriete/logement3.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    #[Route('/propriete/logement4', name: 'logement4')]
    public function logement4(): Response
    {
        return $this->render('propriete/logement4.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

}