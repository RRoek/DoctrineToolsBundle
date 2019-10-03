<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

trait VichUploaderFileTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $file;//link of file stored in db

    /**
     * @Vich\UploadableField(mapping="uploaded_files", fileNameProperty="file")
     * @var File
     * @Assert\File()
     */
    private $fileDiskFile;//stores the binary contents of the file file and it's not persisted in the database (that's why it doesn't define a @ORM annotation).

    //---- ---  --- ----
    public function setFileDiskFile(File $file = null)
    {
        $this->fileDiskFile = $file;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($file) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getFileDiskFile()
    {
        return $this->fileDiskFile;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }
}