<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Entity\Contact;
use App\Entity\Photo;
use App\Entity\Services;
use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les commentaires
        $commentaires = $entityManager->getRepository(Commentaires::class)->findAll();

        // Récupérer les informations de contact (on suppose qu'il n'y en a qu'un seul)
        $contact = $entityManager->getRepository(Contact::class)->findOneBy([]);

        // Récupérer toutes les photos
        $photos = $entityManager->getRepository(Photo::class)->findAll();

        // Récupérer tous les services
        $services = $entityManager->getRepository(Services::class)->findAll();

        // Récupérer les articles par ID (individuellement)
        $article1 = $entityManager->getRepository(Article::class)->find(1);
        $article2 = $entityManager->getRepository(Article::class)->find(2);
        $article3 = $entityManager->getRepository(Article::class)->find(3);
        $article4 = $entityManager->getRepository(Article::class)->find(4);
        $article5 = $entityManager->getRepository(Article::class)->find(5);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'commentaires' => $commentaires,
            'contact' => $contact,
            'photos' => $photos,
            'services' => $services,
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'article5' => $article5,
        ]);
    }
}
