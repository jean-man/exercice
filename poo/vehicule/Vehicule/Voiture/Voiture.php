<?php

namespace Vehicule\Voiture;

use Vehicule\Vehicule;

class Voiture extends Vehicule
{
    const MOTORISATION_ESSENCE = "Essence";
    const MOTORISATION_DIESEL = "Diesel";
    const MOTORISATION_ELECTRIQUE = "Electrique";

    /** @var string $motorisation */
    private $motorisation;

    /**
     * Voiture constructor.
     * @param string $motorisation
     * @param bool $permis
     * @param string $marque
     * @param string $nbRoues
     */

    public function __construct(string $motorisation, string $marque, int $nbRoues = 4, bool $permis = true)
    {
        echo "Construction d'une voiture <br>";

        $this->motorisation = $motorisation;
        parent::__construct($marque, $nbRoues, $permis);
    }

    public function klaxoner(): void
    {

        echo "Bip bip<br>";
    }

    /**
     * @return string
     */
    public function getMotorisation(): string
    {
        return $this->motorisation;
    }


}