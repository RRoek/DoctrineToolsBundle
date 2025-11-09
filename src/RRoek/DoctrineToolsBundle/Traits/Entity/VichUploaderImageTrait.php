<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

trait VichUploaderImageTrait
{
    #[ORM\Column(nullable: true)]
    private ?string $image = null;//link of image stored in db

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[Vich\UploadableField(mapping: 'uploaded_images', fileNameProperty: 'image', size: 'imageSize')]
    private $imageFile;//stores the binary contents of the image file and it's not persisted in the database (that's why it doesn't define a @ORM annotation).

    //---- ---  --- ----
    public function setImageFile(?File $image = null): void
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if (null !== $image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }
}