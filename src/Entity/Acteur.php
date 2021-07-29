<?php

namespace App\Entity;

use App\Repository\ActeurRepository;
use App\Validator\Constraints as AppAssert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ActeurRepository::class)
 * @UniqueEntity("nomPrenom", message="Saisie invalide. Cet(tte) acteur/actrice existe peut-être déjà.")
 */
class Acteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Nom Prénom doit être renseigné")
     * @Assert\Length(min="1", max="255", minMessage="Nom Prénom doit faire au moins {{ min }} caratère", maxMessage="Nom Prénom peut faire au plus {{ max }} caractère")
     */
    private $nomPrenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date de naissance doit être renseigné")
     * @AppAssert\DateBetween(dateMin="01/01/1800", dateMax="?now")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La nationalité doit être renseigné")
     * @Assert\Length(min="1", max="255", minMessage="La nationalité doit faire au moins {{ min }} caratère", maxMessage="La nationalité peut faire au plus {{ max }} caractère")
     */
    private $nationalite;

    /**
     * @ORM\ManyToMany(targetEntity=Film::class, mappedBy="acteurs", fetch="EAGER")
     * @Assert\Unique(message="Ce film fait déjà partie de la filmographie de cet acteur")
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

    public function getNomPrenom(): ?string
    {
        return $this->nomPrenom;
    }

    public function setNomPrenom(string $nomPrenom = null): self
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance = null): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite = null): self
    {
        $this->nationalite = $nationalite;

        return $this;
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
            $film->addActeur($this);
        }

        return $this;
    }

    public function removeFilm(Film $film): self
    {
        if ($this->films->removeElement($film))
        {
            $film->removeActeur($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNomPrenom();
    }
}
