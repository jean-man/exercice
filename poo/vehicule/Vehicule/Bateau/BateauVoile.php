<?php

namespace Vehicule\Bateau;

use Vehicule\vehicule;

class BateauVoile extends Bateau
{
    /** @var int $nbMats */
    private $nbMats;
    /** @var string $chant */

    public function demarrer(): void
    {
        echo "Hissez les voiles !";
    }

    /**
     * @return int
     */
    public function getNbMats(): int
    {
        return $this->nbMats;
    }

    /**
     * @param int $nbMats
     */
    public function setNbMats(int $nbMats = 3): void
    {
        $this->nbMats = $nbMats;
        echo $nbMats;
    }


    public function chanter(): void
    {
        echo "C'est un fameux " . $this->getNbMats() . "  ";
    }
}