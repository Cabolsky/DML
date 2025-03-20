<?php

namespace App\DataFixtures;

use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $photo1 = new Photo();
        $photo1->setPhoto('picture-00.jpg');
        $photo1->setAccessibilite('Photo d\'une rénovation d\'une porte en bois.');
        $manager->persist($photo1);

        $photo2 = new Photo();
        $photo2->setPhoto('picture-01.jpg');
        $photo2->setAccessibilite('Photo d\'une rénovation d\'une porte en bois.');
        $manager->persist($photo2);

        $photo3 = new Photo();
        $photo3->setPhoto('picture-02.jpg');
        $photo3->setAccessibilite('Photo d\'une rénovation d\'un portail en bois.');
        $manager->persist($photo3);

        $photo4 = new Photo();
        $photo4->setPhoto('picture-03.jpg');
        $photo4->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo4);

        $photo5 = new Photo();
        $photo5->setPhoto('picture-04.jpg');
        $photo5->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo5);

        $photo6 = new Photo();
        $photo6->setPhoto('picture-05.jpg');
        $photo6->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo6);

        $photo7 = new Photo();
        $photo7->setPhoto('picture-06.jpg');
        $photo7->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo7);

        $photo8 = new Photo();
        $photo8->setPhoto('picture-07.jpg');
        $photo8->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo8);

        $photo9 = new Photo();
        $photo9->setPhoto('picture-08.jpg');
        $photo9->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo9);

        $photo10 = new Photo();
        $photo10->setPhoto('picture-09.jpg');
        $photo10->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo10);

        $photo11 = new Photo();
        $photo11->setPhoto('picture-10.jpg');
        $photo11->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo11);

        $photo12 = new Photo();
        $photo12->setPhoto('picture-11.jpg');
        $photo12->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo12);

        $photo13 = new Photo();
        $photo13->setPhoto('picture-12.jpg');
        $photo13->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo13);

        $photo14 = new Photo();
        $photo14->setPhoto('picture-13.jpg');
        $photo14->setAccessibilite('Photo d\'une rénovation d\'une terrasse en bois.');
        $manager->persist($photo14);

        $photo15 = new Photo();
        $photo15->setPhoto('picture-14.jpg');
        $photo15->setAccessibilite('Photo d\'une rénovation d\'un portail en bois.');
        $manager->persist($photo15);

        $manager->flush();
    }
}
