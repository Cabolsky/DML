<?php

namespace App\Controller\Admin;

use App\Entity\Services;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ServicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Services::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(), // Affiche l'ID uniquement en mode détail
            TextField::new('titre')->setLabel('Titre'), // Affiche le titre du service
            TextField::new('description')->setLabel('Description'), // Affiche la description dans un éditeur de texte
            ImageField::new('photo')
                ->setBasePath('/uploads/services') // Chemin d'accès à l'image
                ->setUploadDir('public/uploads/services') // Répertoire d'upload des images
                ->setRequired(true), // Rend ce champ obligatoire
        ];
    }
}
