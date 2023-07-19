<?php

namespace App\Entity;

use App\Repository\VapeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;
use DateTime;


#[ORM\Entity(repositoryClass: VapeRepository::class)]
#[Vich\Uploadable]
class Vape
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $model = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $price = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $height = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $length = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $width = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $diametre = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $contenance = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $accu = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $puissance = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $description = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $poster = null;

    #[Vich\UploadableField(mapping: 'vape_file', fileNameProperty: 'poster')]
    #[Assert\File(
        maxSize: '1M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp',
        ],
    )]
    private ?File $posterFile = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?DatetimeInterface $updatedAt = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'favorite')]
    private Collection $favorite;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fork = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $watt = null;

    public function __construct()
    {
        $this->favorite = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(int $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getDiametre(): ?int
    {
        return $this->diametre;
    }

    public function setDiametre(int $diametre): static
    {
        $this->diametre = $diametre;

        return $this;
    }

    public function getContenance(): ?int
    {
        return $this->contenance;
    }

    public function setContenance(int $contenance): static
    {
        $this->contenance = $contenance;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAccu(): ?int
    {
        return $this->accu;
    }

    public function setAccu(int $accu): static
    {
        $this->accu = $accu;

        return $this;
    }

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(int $puissance): static
    {
        $this->puissance = $puissance;

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

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(?string $poster): static
    {
        $this->poster = $poster;

        return $this;
    }

    public function setPosterFile(?File $poster = null): Vape
    {
        $this->posterFile = $poster;
        if ($poster) {
            $this->updatedAt = new DateTime('now');
        }
        return $this;
    }

    public function getPosterFile(): ?File
    {
        return $this->posterFile;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): Vape
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getFavorite(): Collection
    {
        return $this->favorite;
    }

    public function addFavorite(User $favorite): static
    {
        if (!$this->favorite->contains($favorite)) {
            $this->favorite->add($favorite);
            $favorite->addFavorite($this);
        }

        return $this;
    }

    public function removeFavorite(User $favorite): static
    {
        if ($this->favorite->removeElement($favorite)) {
            $favorite->removeFavorite($this);
        }

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getFork(): ?string
    {
        return $this->fork;
    }

    public function setFork(string $fork): static
    {
        $this->fork = $fork;

        return $this;
    }

    public function getWatt(): ?string
    {
        return $this->watt;
    }

    public function setWatt(?string $watt): static
    {
        $this->watt = $watt;

        return $this;
    }
}
