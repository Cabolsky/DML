<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field; // Utilise Field pour gérer les fichiers

use Vich\UploaderBundle\Form\Type\VichFileType; // Importation du type de champ VichFileType

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(), // Affiche l'ID uniquement en mode détail
            TextField::new('titre')->setLabel('Titre'), // Affiche le titre
            TextField::new('texte')->setLabel('Texte'), // Affiche le texte avec un éditeur

            // Champ pour uploader une nouvelle photo
            Field::new('photoFile') // Utilisation de Field pour le champ de fichier
                ->setFormType(VichFileType::class) // Type de formulaire VichFileType
                ->setLabel('Photo')
                ->setRequired($pageName === 'new'), // Rendre ce champ obligatoire seulement lors de la création

            // Affichage de l'image existante dans la liste des éléments
            ImageField::new('photo')
                ->setBasePath('/uploads/photos') // Spécifie le chemin d'accès aux images
                ->onlyOnIndex(), // N'affiche que dans la liste des éléments
        ];
    }
}
