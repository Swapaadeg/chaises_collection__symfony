<?php

namespace App\Entity;

use App\Repository\TypeDeChaiseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeDeChaiseRepository::class)]
class TypeDeChaise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Chaises>
     */
    #[ORM\OneToMany(targetEntity: Chaises::class, mappedBy: 'type')]
    private Collection $chaises;

    public function __construct()
    {
        $this->chaises = new ArrayCollection();
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

    /**
     * @return Collection<int, Chaises>
     */
    public function getChaises(): Collection
    {
        return $this->chaises;
    }

    public function addChaise(Chaises $chaise): static
    {
        if (!$this->chaises->contains($chaise)) {
            $this->chaises->add($chaise);
            $chaise->setType($this);
        }

        return $this;
    }

    public function removeChaise(Chaises $chaise): static
    {
        if ($this->chaises->removeElement($chaise)) {
            // set the owning side to null (unless already changed)
            if ($chaise->getType() === $this) {
                $chaise->setType(null);
            }
        }

        return $this;
    }
}