<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Attribute as Vich;
use Symfony\Component\Validator\Constraints as Assert;

trait VichUploaderFileTrait
{
    #[ORM\Column(nullable: true)]
    private ?string $file = null;//link of file stored in db

    #[ORM\Column(nullable: true)]
    private ?int $filedSize = null;

    #[Vich\UploadableField(mapping: 'uploaded_files', fileNameProperty: 'file', size: 'fileSize')]
    private $fileDiskFile;//stores the binary contents of the file file and it's not persisted in the database (that's why it doesn't define a @ORM annotation).

    //---- ---  --- ----
    public function setFileDiskFile(?File $file = null): void
    {
        $this->fileDiskFile = $file;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if (null !== $file) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getFileDiskFile(): ?File
    {
        return $this->fileDiskFile;
    }

    public function setFile(?string $file): void
    {
        $this->file = $file;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}