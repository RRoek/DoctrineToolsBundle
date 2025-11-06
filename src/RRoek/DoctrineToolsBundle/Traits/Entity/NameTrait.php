<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait NameTrait.
 */
trait NameTrait
{
    //---- --- Private & Protected Properties : --- ----
    /**
     * @var string
     */
    #[ORM\Column(name: 'lastName', type: 'string', length: 255, nullable: false)]
    private $lastName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'firstName', type: 'string', length: 255, nullable: true)]
    private $firstName;


    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

}
