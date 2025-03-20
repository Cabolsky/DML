<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichFileType; // Importation du bon type de champ
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(), // Affiche l'ID uniquement en mode détail
            TextField::new('accessibilite')->setLabel('Accessibilité'), // Champ accessibilité

            // Champ pour uploader une nouvelle image
            Field::new('photoFile')
                ->setFormType(VichFileType::class) // Utilisation du bon type de formulaire
                ->setLabel('Photo')
                ->setRequired($pageName === 'new'), // Obligation seulement en création

            // Affichage de l'image existante dans la liste des éléments
            ImageField::new('photo')
                ->setBasePath('/uploads/photos') // Chemin d'accès aux images
                ->onlyOnIndex(), // N'affiche que dans la liste des éléments
        ];
    }
}
