<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait IntegerNumberTrait.
 */
trait IntegerNumberTrait
{
    //---- --- Private & Protected Properties : --- ----
    /**
     * @var string
     */
    #[ORM\Column(name: 'integerNumber', type: 'integer', nullable: true)]
    private $integerNumber;

    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getIntegerNumber()
    {
        return $this->integerNumber;
    }

    /**
     * @param string $integerNumber
     *
     * @return self
     */
    public function setIntegerNumber($integerNumber): self
    {
        $this->integerNumber = $integerNumber;

        return $this;
    }
}
