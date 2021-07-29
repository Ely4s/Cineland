<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 * @UniqueEntity("nom", message="Cette catégorie exite déjà.")
 *
 */
class Genre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Le nom doit être renseigné")
     * @Assert\Length(min="1", max="255", minMessage="Le nom doit faire au moins {{ min }} caratère", maxMessage="Le nom peut faire au plus {{ max }} caractère")
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Film::class, mappedBy="genre", fetch="EAGER")
     * @Assert\Unique(message="Ce film fait déjà partie de cette catégorie")
     * @ORM\OrderBy({"dateSortie" = "ASC"})
     */
    private $films;

    public function __construct()
    {
        $this->films = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }

    /**
     * @return Collection|Film[]
     */
    public function getFilms(): Collection
    {
        return $this->films;
    }

    public function addFilm(Film $film): self
    {
        if (!$this->films->contains($film))
        {
            $this->films[] = $film;
        }

        return $this;
    }

    public function removeFilm(Film $film): self
    {
        if ($this->films->removeElement($film))
        {
            // set the owning side to null (unless already changed)
            if ($film->getGenre() === $this) {
                $film->setGenre(null);
            }
        }

        return $this;
    }
}
