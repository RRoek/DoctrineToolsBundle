<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait FloatNumberTrait.
 */
trait FloatNumberTrait
{
    //---- --- Private & Protected Properties : --- ----
    /**
     * @var string
     */
    #[ORM\Column(name: 'floatFloatNumber', type: 'float', scale: 2, nullable: true)]
    private $floatFloatNumber;

    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getFloatNumber()
    {
        return $this->floatFloatNumber;
    }

    /**
     * @param string $floatFloatNumber
     *
     * @return self
     */
    public function setFloatNumber($floatFloatNumber): self
    {
        $this->floatFloatNumber = $floatFloatNumber;

        return $this;
    }
}
