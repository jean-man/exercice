<?php

namespace App\Entity;

use Core\Entity\Entity;

class Civilite extends Entity{

    /** @var int $id */
    protected $id;
    /** @var int $id */
    protected $libelle;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getLibelle(): int
    {
        return $this->libelle;
    }

    /**
     * @param int $libelle
     */
    public function setLibelle(int $libelle): void
    {
        $this->libelle = $libelle;
    }
}