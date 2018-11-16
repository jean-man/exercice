<?php

function my_autoloader($class_name)
{
    $class_name = str_replace("\\", "/", $class_name);
    require_once $class_name . ".php";
}

spl_autoload_register('my_autoloader');

use Vehicule\Bateau\BateauVoile;
use Vehicule\Voiture\Voiture;

$voiture = new Voiture(Voiture::MOTORISATION_ELECTRIQUE, "Tesla", 3, false);
$voiture->avancer(15);
$voiture->klaxoner();

$bateau = new BateauVoile("Machin", 0, false);
$bateau->setNbMats(4);
$bateau->chanter();
$bateau->avancer(10);