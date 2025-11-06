<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait IsActiveTrait.
 */
trait IsActiveTrait
{
    //---- --- Private & Protected Properties : --- ----
    #[ORM\Column(name: 'is_active', type: 'boolean')]
    private $isActive = false;


    //---- --- Getters & Setters : --- ----

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
