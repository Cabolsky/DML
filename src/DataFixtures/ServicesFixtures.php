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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'photo' => 'cards-2.jpg',
                'titre' => 'AMENAGEMENT INT.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'photo' => 'cards-3.jpg',
                'titre' => 'TERRASSE & CLOTURE.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'photo' => 'cards-4.jpg',
                'titre' => 'PERGOLA & CARPORT.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'photo' => 'cards-5.jpg',
                'titre' => 'POSE CUISINE.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'photo' => 'cards-6.jpg',
                'titre' => 'PETITE RENOVATION.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
