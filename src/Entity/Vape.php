<?php

namespace App\Entity;

use App\Repository\VapeRepository;
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
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $height = null;

    #[ORM\Column]
    private ?int $length = null;

    #[ORM\Column]
    private ?int $width = null;

    #[ORM\Column]
    private ?int $diametre = null;

    #[ORM\Column]
    private ?int $contenance = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $accu = null;

    #[ORM\Column]
    private ?int $puissance = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poster = null;

    #[Vich\UploadableField(mapping: 'vape_file', fileNameProperty: 'poster')]
    #[Assert\File(
        maxSize: '1M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp'],
    )]
    private ?File $posterFile = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?DatetimeInterface $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'category')]
    private ?VapeCategory $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;


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

    public function setPoster(?string $poster): Vape
    {
        $this->poster = $poster;

        return $this;
    }

    public function getPosterFile(): ?File
    {
        return $this->posterFile;
    }

    public function setPosterFile(File $image = null): Vape
    {
        if ($image) {
            $this->updatedAt = new DateTime('now');
        }
        return $this;
    }

    public function getCategory(): ?VapeCategory
    {
        return $this->category;
    }

    public function setCategory(?VapeCategory $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }
}
