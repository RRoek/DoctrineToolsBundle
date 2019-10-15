<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait IsEnabledTrait.
 */
trait IsEnabledTrait
{
    //---- --- Private & Protected Properties : --- ----

    /**
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = false;


    //---- --- Getters & Setters : --- ----

    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }
}
