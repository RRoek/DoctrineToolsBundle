<?php

namespace RRoek\DoctrineToolsBundle\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait TitleTrait.
 */
trait TitleTrait
{
    //---- --- Private & Protected Properties : --- ----
    /**
     * @var string
     */
    #[ORM\Column(name: 'title', type: 'string', nullable: false)]
    private $title;

    //---- --- Getters & Setters : --- ----

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }
}
