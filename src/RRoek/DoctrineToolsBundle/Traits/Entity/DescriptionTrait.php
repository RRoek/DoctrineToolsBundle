<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait DescriptionTrait.
 */
trait DescriptionTrait
{
    //---- --- Private & Protected Properties : --- ----
    /**
     * @var string
     */
    #[ORM\Column(name: 'description', type: 'string', nullable: true)]
    private $description;

    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
}
