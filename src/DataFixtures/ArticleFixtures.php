<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $articles = [
            [
                'photo' => 'article-3.jpg',
                'titre' => 'SALUT MOI C\'EST DAVID.',
                'texte' => 'Moi, c\'est David. Diplômé en menuiserie et fort de plusieurs années d\'expérience, je suis un bricoleur passionné depuis mon plus jeune âge. J\'ai créé DML Multiservices pour mettre mon savoir-faire à votre service. Spécialisé dans le travail du bois et la rénovation, je vous accompagne dans tous vos projets d\'aménagement avec sérieux et expertise.'
            ],
            [
                'photo' => 'article-1.jpg',
                'titre' => 'AMÉNAGEMENT ET RÉNOVATION.',
                'texte' => 'Je suis là pour vous accompagner dans tous vos projets d’aménagement et de rénovation dans les Landes. Que ce soit pour créer une belle terrasse, installer une clôture, poser votre cuisine ou réaliser une petite rénovation, je mets tout en œuvre pour transformer vos idées en réalité. Basé à Linx, je me déplace dans toute la région des Landes pour vous offrir un service personnalisé et de qualité.'
            ],
            [
                'photo' => 'article-2.jpg',
                'titre' => 'MES RÉALISATIONS :',
                'texte' => 'Un aperçu de mon travail ! Entre aménagements extérieurs, rénovations et installations sur mesure, chaque projet est réalisé avec soin et précision. J\'aime créer des espaces qui allient esthétisme et fonctionnalité. Jetez un œil à mes réalisations !'
            ],
        ];

        foreach ($articles as $data) {
            $article = new Article();
            $article->setPhoto($data['photo']);
            $article->setTitre($data['titre']);
            $article->setTexte($data['texte']);
            
            $manager->persist($article);
        }

        $manager->flush();
    }
}
