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
        ]);
    }

    /**
     * @Route("/entreprises", name="pro_stage_entreprises")
     */
    public function affichageEntreprises(): Response
    {
        return $this->render('pro_stage/affichageEntreprises.html.twig', [
        ]);
    }

    /**
     * @Route("/formations", name="pro_stage_formations")
     */
    public function affichageFormations(): Response
    {
        return $this->render('pro_stage/affichageFormations.html.twig', [
        ]);
    }

        /**
         * @Route("/stages/{id}", name="pro_stage_stages")
         */
        public function affichageStages($id): Response
        {
            return $this->render('pro_stage/affichageStages.html.twig', [
                'idStage'=>$id]);
        }


}
