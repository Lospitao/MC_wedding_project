<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeddingAttendantsController extends AbstractController
{
    /**
     * @Route("/invitados", name="wedding_attendants")
     */
    public function index(): Response
    {
        return $this->render('wedding_attendants/index.html.twig', [
            'controller_name' => 'WeddingAttendantsController',
        ]);
    }
}
