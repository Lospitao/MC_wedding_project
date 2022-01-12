<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeddingScheduleController extends AbstractController
{
    /**
     * @Route("/horarios", name="wedding_schedule")
     */
    public function index(): Response
    {
        return $this->render('wedding_schedule/index.html.twig', [
            'controller_name' => 'WeddingScheduleController',
        ]);
    }
}
