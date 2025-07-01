<?php

namespace App\Entity;

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


    #[ORM\ManyToOne(inversedBy: 'modifications')]
    private ?User $modifiedBy = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $lastModifiedAt = null;

    /**
     * @var Collection<int, Commentaires>
     */
    #[ORM\OneToMany(targetEntity: Commentaires::class, mappedBy: 'chaises')]
    private Collection $commentaires;

    #[ORM\ManyToOne(inversedBy: 'chaises')]
    private ?TypeDeChaise $type = null;

     //UPLOAD DES IMAGES
    #[Vich\UploadableField(mapping: 'images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;
    
    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;
    
    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;
    
    #[ORM\ManyToOne(inversedBy: 'chaises')]
    private ?User $user = null;

    /**
     * @var Collection<int, Couleurs>
     */
    #[ORM\ManyToMany(targetEntity: Couleurs::class, inversedBy: 'chaises')]
    private Collection $couleur;

    /**
     * @var Collection<int, Note>
     */
    #[ORM\OneToMany(targetEntity: Note::class, mappedBy: 'chaises')]
    private Collection $note;

    
    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->date_ajout = new \DateTime();
        $this->couleur = new ArrayCollection();
        $this->notes = new ArrayCollection();
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
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaires(Commentaires $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setChaises($this);
        }

        return $this;
    }

    public function removeCommentaires(Commentaires $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
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

    public function getLastModifiedAt(): ?\DateTimeInterface
    {
        return $this->lastModifiedAt;
    }

    public function setLastModifiedAt(?\DateTimeInterface $lastModifiedAt): static
    {
        $this->lastModifiedAt = $lastModifiedAt;
        return $this;
    }

    public function getModifiedBy(): ?User
    {
    return $this->modifiedBy;
    }

    public function setModifiedBy(?User $modifiedBy): static
    {
        $this->modifiedBy = $modifiedBy;
        return $this;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Couleurs>
     */
    public function getCouleur(): Collection
    {
        return $this->couleur;
    }

    public function addCouleur(Couleurs $couleur): static
    {
        if (!$this->couleur->contains($couleur)) {
            $this->couleur->add($couleur);
        }

        return $this;
    }

    public function removeCouleur(Couleurs $couleur): static
    {
        $this->couleur->removeElement($couleur);

        return $this;
    }

    /**
     * @var Collection<int, Note>
     */
    #[ORM\OneToMany(targetEntity: Note::class, mappedBy: 'chaises')]
    private Collection $notes;

    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): static
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setChaises($this);
        }

        return $this;
    }

    public function removeNote(Note $note): static
    {
        if ($this->notes->removeElement($note)) {
            if ($note->getChaises() === $this) {
                $note->setChaises(null);
            }
        }

        return $this;
    }

    public function getMoyenneNotes(): ?float
    {
        if ($this->notes->isEmpty()) {
            return null;
        }

        $total = 0;
        foreach ($this->notes as $note) {
            $total += $note->getNote();
        }

        return round($total / count($this->notes), 2);
    }
}