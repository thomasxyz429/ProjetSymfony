<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;

class ProStageController extends AbstractController
{
    /**
     * @Route("/", name="pro_stage")
     */
    public function index(): Response
    {
      //RECUPERER LE Repository
      $repositoryStages = $this->getDoctrine()->getRepository(Stage::class);

      //RECUERER LES STAGES
$stages=$repositoryStages->findAll();
      //ENVOYER LES STAGE
        return $this->render('pro_stage/index.html.twig', ["stages"=>$stages]);
    }

    /**
     * @Route("/entreprises", name="pro_stage_entreprises")
     */
    public function affichageEntreprises(): Response
    {
        return $this->render('pro_stage/affichageEntreprises.html.twig', [
        'idEntreprise'=>"vide"]);
    }

    /**
     * @Route("/entreprises/{idEntreprise}", name="pro_stage_entreprises_avec_id")
     */
    public function affichageEntreprisesAvecId($idEntreprise): Response
    {
        return $this->render('pro_stage/affichageEntreprises.html.twig', [
          'idEntreprise'=>$idEntreprise]);
    }

    /**
     * @Route("/formations", name="pro_stage_formations")
     */
    public function affichageFormations(): Response
    {
        return $this->render('pro_stage/affichageFormations.html.twig', [
          'idFormation'=>"vide"  ]);
    }

    /**
     * @Route("/formations/{idFormation}", name="pro_stage_formations_avec_id")
     */
    public function affichageFormationsAvecId($idFormation): Response
    {
        return $this->render('pro_stage/affichageFormations.html.twig', [
          'idFormation'=>$idFormation ]);
    }

        /**
         * @Route("/stages/{id}", name="pro_stage_stages")
         */
        public function affichageStages($id): Response
        {
          //RECUPERER LE Repository
          $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);

          //RECUERER LES STAGES
          $stage=$repositoryStage->find($id);
            return $this->render('pro_stage/affichageStages.html.twig', [
                'stage'=>$stage]);
        }


}
