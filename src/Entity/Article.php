<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[Vich\Uploadable] // Annotation pour signaler que cette entité gère l'upload de fichiers
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)] // Permet d'accepter des valeurs NULL
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texte = null;

    // Nouvelle propriété pour le fichier photo
    #[Vich\UploadableField(mapping: 'photos', fileNameProperty: 'photo')] // Lien avec le champ photo dans la DB
    private ?File $photoFile = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTime $updatedAt = null; // Propriété pour la mise à jour automatique

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto(): ?string
    {
        return $this->photo ?: ''; // Retourne une chaîne vide si `photo` est null
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo ?: ''; // Gestion de la valeur null pour `photo`
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): static
    {
        $this->texte = $texte;
        return $this;
    }

    // Getter et setter pour la propriété photoFile
    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }

    public function setPhotoFile(?File $photoFile = null): static
    {
        $this->photoFile = $photoFile;

        if ($photoFile) {
            // Mettre à jour le champ `updatedAt` lorsque le fichier est modifié
            $this->updatedAt = new \DateTime();
        }

        return $this;
    }

    // Getter et setter pour updatedAt
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
