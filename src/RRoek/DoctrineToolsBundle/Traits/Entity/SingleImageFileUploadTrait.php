<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

trait SingleImageFileUploadTrait
{
    /**
     * @var UploadedFile
     */
    protected $file;

    /**
     * @var string
     *
     * @ORM\Column(name="imageName", type="string", length=255, nullable=true)
     */
    protected $imageName;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=255, nullable=true)
     */
    protected $imagePath;

    /**
     * Set imageName.
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * Get imageName.
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set imagePath.
     *
     * @param string $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * Get imagePath.
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Returns the image web path.
     *
     * @return string
     */
    public function getImageWebPath()
    {
        $matches = [];
        preg_match('#web/(.+)#', $this->getImagePath(), $matches);

        $webPath = isset($matches[1]) ? $matches[1] : $this->getImagePath();

        return sprintf('%s/%s', $webPath, $this->getImageName());
    }
}
