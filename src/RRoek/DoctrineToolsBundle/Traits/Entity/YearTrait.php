<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait YearTrait.
 */
trait YearTrait
{
    //---- --- Private & Protected Properties : --- ----

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="integer", length=5, nullable=false)
     */
    private $year;

    //---- --- Getters & Setters : --- ----


    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     *
     * @return self
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }
}
