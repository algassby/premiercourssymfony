<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Utilisateur;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $Utilsateur = new Utilisateur();
         for($j = 0; $j < 100 ; $j ++){
         $Utilsateur = new Utilisateur();
         $Utilsateur->setEmail('algasby.com')
                    ->setPassword('password')
                    ->setPseudo('dljfdl');
         $manager->persist($Utilsateur);
         }

         $manager->flush();
    }
}
