<?php

namespace Vehicule\Bateau;

use Vehicule\Vehicule;

abstract class Bateau extends Vehicule
{
    /** @var int $nb_mats */
    private $nb_mats;
    /** @var float $taille */
    private $taille;
    /** @var boolean $cabine */
    private $cabine;
    /** @var string $port */
    private $port;


    

    /**
     * @return int
     */
    public function getNbMats(): int
    {
        return $this->nb_mats;
    }

    /**
     * @param int $nb_mats
     */
    public function setNbMats(int $nb_mats = 3): void
    {
        $this->nb_mats = $nb_mats;
    }

    /**
     * @return float
     */
    public function getTaille(): float
    {
        return $this->taille;
    }

    /**
     * @param float $taille
     */
    public function setTaille(float $taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return bool
     */
    public function isCabine(): bool
    {
        return $this->cabine;
    }

    /**
     * @param bool $cabine
     */
    public function setCabine(bool $cabine): void
    {
        $this->cabine = $cabine;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort(string $port): void
    {
        $this->port = $port;
    }

    public function chanter(): void
    {
        echo "c'est un fameux" .  $this->getNbMats() . "hissez haut, Santiano!";

    }


}

