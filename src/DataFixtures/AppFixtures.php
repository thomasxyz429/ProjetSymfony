<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use  App\Entity\Entreprise;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $IBM = new Entreprise();
        $IBM->setIdEntreprise (IBM0);
        $IBM->setNom ("IBM");
        $IBM->setMilieu('Programmation et Industrie Fine');
        $IBM->setAdresse('IBM@contactStage.fr');
        $manager->persist($IBM);

        $manager->flush();
    }
}
