<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    #[Route('/pages/propos', name: 'propos')]
    public function logement1(): Response
    {
        return $this->render('pages/propos.html.twig');
    }

    #[Route('/pages/aides', name: 'aide')]
    public function aides(): Response
    {
        return $this->render('pages/aides.html.twig', [
            'current_menu' => 'aides'
        ]);
    }

    #[Route('/pages/depot', name: 'depot')]
    public function depot(): Response
    {
        return $this->render('pages/depot.html.twig', [
            'current_menu' => 'depot'
        ]);
    }

    #[Route('/pages/faq', name: 'faq')]
    public function faq(): Response
    {
        return $this->render('pages/faq.html.twig');
    }

  

}