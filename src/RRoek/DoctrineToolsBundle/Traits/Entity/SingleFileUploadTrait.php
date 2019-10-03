<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

trait SingleFileUploadTrait
{
    /**
     * @var UploadedFile
     */
    protected $file;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=255, nullable=true)
     */
    protected $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="filePath", type="string", length=255, nullable=true)
     */
    protected $filePath;

    /**
     * Set fileName.
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Get fileName.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set filePath.
     *
     * @param string $filePath
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Get filePath.
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Returns the image web path.
     *
     * @return string
     */
    public function getImageWebPath()
    {
        $matches = [];
        preg_match('#web/(.+)#', $this->getFilePath(), $matches);

        $webPath = isset($matches[1]) ? $matches[1] : $this->getFilePath();

        return sprintf('%s/%s', $webPath, $this->getFileName());
    }
}
