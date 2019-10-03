<?php

namespace App\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait GenderTrait.
 */
trait GenderTrait
{
    //---- --- Private & Protected Properties : --- ----


    /**
     * @var string
     * @ORM\Column(name="gender", type="string", length=15, nullable=true)
     */
    private $gender;

    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }


}
