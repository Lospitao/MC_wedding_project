<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeddingPicturesController extends AbstractController
{
    /**
     * @Route("/fotos_boda", name="wedding_pictures")
     */
    public function index(): Response
    {
        return $this->render('wedding_pictures/index.html.twig', [
            'controller_name' => 'WeddingPicturesController',
        ]);
    }
}
