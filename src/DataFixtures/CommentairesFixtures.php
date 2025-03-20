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
                'texte' => 'Basé à Linx, DML intervient dans toute la région des Landes. Que ce soit un aménagement extérieur, une pose de cuisine ou une petite rénovation, nous nous déplaçons en fonction de vos besoins.',
                'icone' => 'icon-local.png'
            ],
            [
                'titre' => 'INTERVENTION RAPIDE',
                'texte' => 'Besoin d’un coup de main rapidement ? J’assure des interventions efficaces pour vos petits travaux et dépannages. Réactif et à l’écoute, je fais en sorte de répondre au plus vite à vos demandes.',
                'icone' => 'icon-time.png'
            ],
            [
                'titre' => 'DEVIS GRATUITS',
                'texte' => 'Un projet en tête ? Discutons-en ! J’évalue vos besoins et vous propose un devis gratuit, sans engagement. Une solution claire et adaptée, en toute transparence, pour concrétiser vos idées.',
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
