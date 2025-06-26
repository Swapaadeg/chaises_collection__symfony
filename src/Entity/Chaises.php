<?php

namespace App\Entity;

use Vich\UploadableField;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChaisesRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types as DBALTypes;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;

#[Vich\Uploadable]
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

     //UPLOAD DES IMAGES
    #[Vich\UploadableField(mapping: 'images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
        $this->date_ajout = new \DateTime(); // ✅ initialisation automatique de la date
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

        public function setImageFile(?File $imageFile = null): void {
        $this->imageFile = $imageFile;

        if ($imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    //IMAGES
    public function getImageFile(): ?File {

    return $this->imageFile;
    }

    public function setImageName(?string $imageName): void {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string {
       return $this->imageName;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
    return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}