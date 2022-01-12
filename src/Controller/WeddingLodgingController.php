<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeddingLodgingController extends AbstractController
{
    /**
     * @Route("/alojamiento", name="wedding_lodging")
     */
    public function index(): Response
    {
        return $this->render('wedding_lodging/index.html.twig', [
            'controller_name' => 'WeddingLodgingController',
        ]);
    }
}
