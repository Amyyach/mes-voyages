<?php

// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VoyagesController extends AbstractController
{
    #[Route('/voyages', name: 'voyages')]
    public function index(): Response
    {
        return $this->render('pages/voyages.html.twig', [
            'voyages' => [
                ['ville' => 'Paris', 'pays' => 'France', 'description' => 'La ville lumière.'],
                ['ville' => 'Rome', 'pays' => 'Italie', 'description' => 'La cité éternelle.'],
            ],
        ]);
    }
}   