<?php

namespace App\Controller\Admin;

use App\Entity\Commentaires;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class CommentairesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commentaires::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(), 
            TextField::new('titre'),
            TextField::new('texte'),
            TextField::new('icone'),
        ];
    }
}
