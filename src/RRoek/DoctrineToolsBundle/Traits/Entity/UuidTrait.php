<?php

namespace App\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Trait UuidTrait.
 */
trait UuidTrait
{
    //---- --- Private & Protected Properties : --- ----

    /**
     * The internal primary identity key.
     *
     * @var UuidInterface
     *
     * @ORM\Column(type="uuid")
     */
    protected $uuid;

    /**
     * @return UuidInterface
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param UuidInterface $uuid
     */
    public function setUuid(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public function uuidToString()
    {
        if (!$this->uuid) {
            return $this->uuid;
        }

        if (is_string($this->uuid)) {
            return $this->uuid;
        }

        return $this->uuid->toString();
    }

}
