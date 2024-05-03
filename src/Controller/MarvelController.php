<?php

// src/Controller/DragonBallController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MarvelController extends AbstractController
{
    #[Route('/Marvel', name: 'Marvel')]
    public function ajax(): Response
    {
        return $this->render('Marvel/index.html.twig');
    }
}
