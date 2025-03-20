<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use App\Entity\Article;
use App\Entity\Contact;
use App\Entity\Services;
use App\Entity\Commentaires;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\Admin\ArticleCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;

#[Route('/admin', name: 'admin')]
class AdminDashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {}

    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(ArticleCrudController::class) 
            ->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Commentaires', 'fa fa-comment', Commentaires::class);
        yield MenuItem::linkToCrud('Articles', 'fa fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Photo', 'fa fa-car', Photo::class);
        yield MenuItem::linkToCrud('Services', 'fa fa-globe', Services::class);
        yield MenuItem::linkToCrud('Contacts', 'fa fa-envelope', Contact::class);

        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
}
