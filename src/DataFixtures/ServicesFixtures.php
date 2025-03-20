<?php

namespace App\DataFixtures;

use App\Entity\Services;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ServicesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $servicesData = [
            [
                'photo' => 'cards-1.jpg',
                'titre' => 'AMENAGEMENT EXT.',
                'description' => 'Conception de cabanons, meubles extérieurs, abris, rangements… DML est là pour sublimer votre extérieur avec des réalisations sur mesure et adaptées à vos besoins.',
            ],
            [
                'photo' => 'cards-2.jpg',
                'titre' => 'AMENAGEMENT INT.',
                'description' => 'Conception de meubles sur mesure, rangements , aménagements … DML est là pour transformer et embellir votre intérieur avec des solutions adaptées à vos besoins.',
            ],
            [
                'photo' => 'cards-5.jpg',
                'titre' => 'TERRASSE & CLOTURE.',
                'description' => 'Création de terrasses en bois, installation de clôtures, palissades… DML vous accompagne pour embellir vos extérieurs avec des aménagements solides et esthétiques.',
            ],
            [
                'photo' => 'cards-4.jpg',
                'titre' => 'PERGOLA & CARPORT.',
                'description' => 'Installation de pergolas et carports sur mesure… DML crée des espaces extérieurs pratiques et esthétiques, alliant protection et élégance pour votre maison.',
            ],
            [
                'photo' => 'cards-3.jpg',
                'titre' => 'POSE CUISINE.',
                'description' => 'Installation de cuisines sur mesure… DML assure la pose de votre cuisine avec soin et précision, pour un espace fonctionnel, esthétique et adapté à vos besoins.',
            ],
            [
                'photo' => 'cards-6.jpg',
                'titre' => 'PETITE RENOVATION.',
                'description' => 'Travaux de petite rénovation en tout genre … DML vous accompagne pour rafraîchir, améliorer, optimiser et moderniser votre intérieur comme votre extérieur.',
            ],
        ];

        foreach ($servicesData as $data) {
            $service = new Services();
            $service->setPhoto($data['photo']);
            $service->setTitre($data['titre']);
            $service->setDescription($data['description']);
            $manager->persist($service);
        }

        $manager->flush();
    }
}
