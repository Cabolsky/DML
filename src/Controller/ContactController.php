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

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commentaires = $entityManager->getRepository(Commentaires::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findOneBy([]);
        $photos = $entityManager->getRepository(Photo::class)->findAll();
        $services = $entityManager->getRepository(Services::class)->findAll();
        $article1 = $entityManager->getRepository(Article::class)->find(1);
        $article2 = $entityManager->getRepository(Article::class)->find(2);
        $article3 = $entityManager->getRepository(Article::class)->find(3);
        $article4 = $entityManager->getRepository(Article::class)->find(4);
        $article5 = $entityManager->getRepository(Article::class)->find(5);
        
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'commentaires' => $commentaires,
            'contact' => $contact,
            'photos' => $photos,
            'services' => $services,
            'services' => $services,
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'article5' => $article5,
        ]);
    }
}
