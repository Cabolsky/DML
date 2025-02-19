<?php

namespace App\DataFixtures;

use App\Entity\Commentaires;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentairesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commentaires = [
            [
                'titre' => 'SECTEUR D\'ACTIVITE',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'icone' => 'icon-local.png'
            ],
            [
                'titre' => 'INTERVENTION RAPIDE',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'icone' => 'icon-time.png'
            ],
            [
                'titre' => 'DEVIS GRATUITS',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'icone' => 'icon-devis.png'
            ],
        ];

        foreach ($commentaires as $data) {
            $commentaire = new Commentaires();
            $commentaire->setTitre($data['titre']);
            $commentaire->setTexte($data['texte']);
            $commentaire->setIcone($data['icone']);
            
            $manager->persist($commentaire);
        }

        $manager->flush();
    }
}
