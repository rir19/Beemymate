<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ErreurController extends AbstractController
{
    #[Route('/bundles/TwigBundle/Exception', name: 'error503')]
    public function index(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error503.html.twig');
    }

}