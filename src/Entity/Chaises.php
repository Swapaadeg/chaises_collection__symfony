<?php

namespace App\Entity;

use App\Repository\ChaisesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types as DBALTypes;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChaisesRepository::class)]
class Chaises
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: DBALTypes::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: DBALTypes::DATE_MUTABLE)]
    private ?\DateTime $date_ajout = null;

    #[ORM\Column]
    private ?int $valeur_estimee = null;

    /**
     * @var Collection<int, Commentaires>
     */
    #[ORM\OneToMany(targetEntity: Commentaires::class, mappedBy: 'chaises')]
    private Collection $commentaire;

    #[ORM\ManyToOne(inversedBy: 'chaises')]
    private ?TypeDeChaise $type = null;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateAjout(): ?\DateTime
    {
        return $this->date_ajout;
    }

    public function setDateAjout(\DateTime $date_ajout): static
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    public function getValeurEstimee(): ?int
    {
        return $this->valeur_estimee;
    }

    public function setValeurEstimee(int $valeur_estimee): static
    {
        $this->valeur_estimee = $valeur_estimee;

        return $this;
    }

    /**
     * @return Collection<int, Commentaires>
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(Commentaires $commentaire): static
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire->add($commentaire);
            $commentaire->setChaises($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaires $commentaire): static
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getChaises() === $this) {
                $commentaire->setChaises(null);
            }
        }

        return $this;
    }

    public function getType(): ?TypeDeChaise
    {
        return $this->type;
    }

    public function setType(?TypeDeChaise $type): static
    {
        $this->type = $type;

        return $this;
    }
}