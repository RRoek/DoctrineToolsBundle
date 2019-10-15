<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

trait VichUploaderImageTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;//link of image stored in db

    /**
     * @Vich\UploadableField(mapping="uploaded_images", fileNameProperty="image")
     * @var File
     * @Assert\Image()
     */
    private $imageFile;//stores the binary contents of the image file and it's not persisted in the database (that's why it doesn't define a @ORM annotation).

    //---- ---  --- ----
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
}