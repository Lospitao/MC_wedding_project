<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KeyWordAuthorisationController extends AbstractController
{
    /**
     * @Route("/perdidos_en_madrid", name="perdidos_en_madrid")
     */
    public function index(): Response
    {
        return $this->render('key_word_authorisation/index.html.twig', [
            'controller_name' => 'KeyWordAuthorisationController',
        ]);
    }
    /**
     * @Route("/authentication", name="authentication")
     */
    public function authenticateKeyword(Request $request) {
        $keyword = $request->request->get('keyword');
        if ($keyword != 'perdidosenmadrid') {
            $this->addFlash('error', 'No tienes permiso para acceder.');
            return $this->render('key_word_authorisation/index.html.twig', [
                'controller_name' => 'KeyWordAuthorisationController',
            ]);
        } else
        return $this->redirectToRoute('app_register');
    }
}
