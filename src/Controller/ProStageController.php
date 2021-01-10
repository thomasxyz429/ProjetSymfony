<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProStageController extends AbstractController
{
    /**
     * @Route("/pro/stage", name="pro_stage")
     */
    public function index(): Response
    {
        return $this->render('pro_stage/index.html.twig', [
            'controller_name' => 'ProStageController',
        ]);
    }

    /**
     * @Route("/entreprises", name="pro_stage_entreprises")
     */
    public function affichageEntreprises(): Response
    {
        return $this->render('pro_stage/affichageEntreprises.html.twig', [
            'controller_name' => 'ProStageController',
        ]);
    }

    /**
     * @Route("/formations", name="pro_stage_formations")
     */
    public function affichageformations(): Response
    {
        return $this->render('pro_stage/affichageformations.html.twig', [
            'controller_name' => 'ProStageController',
        ]);
    }
}
