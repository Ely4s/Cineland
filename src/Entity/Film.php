<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use App\Validator\Constraints as AppAssert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 * @UniqueEntity("titre", message="Saisie invalide. Ce film existe peut-être déjà.")
 */
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Le titre doit être renseigné")
     * @Assert\Length(min="1", max="255", minMessage="Le titre doit faire au moins {{ min }} caratère", maxMessage="Le titre peut faire au plus {{ max }} caractère")
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="La durée doit être renseigné")
     * @Assert\Range(min="1", max="1000000", minMessage="La durée doit être d'au moins {{ min }} min", maxMessage="La durée doit être d'au plus {{ max }} min")
     */
    private $duree;

    /**
     * @ORM\Column(type="date")
     * @AppAssert\DateBetween(dateMin="01/01/1890", dateMax="?last day of December +15 years")
     * @Assert\NotBlank(message="La date de sortie doit être renseigné")
     */
    private $dateSortie;

    public static function getNoteType()
    {
        $noteType = array();
        for($i = 0; $i <= 20; $i++) $noteType[]=$i;
        return $noteType;
    }

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice(callback="getNoteType", message="La note est invalide. Elle doit être comprise entre 0 et 20")
     * @Assert\NotBlank(message="La note doit être renseigné")
     */
    private $note;

    public static function getAgeMinimalType()
    {
        $ageMinimalType["Tout publique"] = 0;
        for($i = 1; $i <= 18; $i++) $ageMinimalType[$i]=$i;
        return $ageMinimalType;
    }

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice(callback="getAgeMinimalType", message="La signalétique jeunesse saisie n'existe pas")
     * @Assert\NotBlank(message="L'âge minimal doit être renseigné")
     */
    private $ageMinimal;

    /**
     * @ORM\ManyToOne(targetEntity=Genre::class, inversedBy="films", fetch="EAGER")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Le genre doit être renseigné")
     */
    private $genre;

    /**
     * @ORM\ManyToMany(targetEntity=Acteur::class, inversedBy="films", fetch="EAGER")
     * @Assert\Unique(message="Ce film a déjà cet acteur dans son casting")
     * @ORM\OrderBy({"nomPrenom" = "ASC"})
     */
    private $acteurs;

    public function __construct()
    {
        $this->acteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre = null): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree = null): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie = null): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note = null): self
    {
        $this->note = $note;

        return $this;
    }

    public function getAgeMinimal(): ?int
    {
        return $this->ageMinimal;
    }

    public function setAgeMinimal(int $ageMinimal = null): self
    {
        $this->ageMinimal = $ageMinimal;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre = null): self
    {
        $this->genre = $genre;
        $genre->addFilm($this);

        return $this;
    }

    /**
     * @return Collection|Acteur[]
     */
    public function getActeurs(): Collection
    {
        return $this->acteurs;
    }

    public function addActeur(Acteur $acteur): self
    {
        if (!$this->acteurs->contains($acteur))
        {
            $this->acteurs[] = $acteur;
        }

        return $this;
    }

    public function removeActeur(Acteur $acteur): self
    {
        $this->acteurs->removeElement($acteur);

        return $this;
    }

    public function __toString()
    {
        return $this->getTitre();
    }
}
