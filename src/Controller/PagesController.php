<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_accueil")
     */
    public function accueil(): Response
    {
        return $this->render('pages/accueil.html.twig');
    }

    /**
     * @Route("/a-propos", name="app_a-propos")
     */
    public function aPropos(): Response
    {
        return $this->render('pages/a-propos.html.twig');
    }

    
    /**
     * @Route("/liste-films", name="app_liste-films")
     */
    public function listFilms(): Response
    {
        return $this->render('pages/liste-films.html.twig');
    }
}
