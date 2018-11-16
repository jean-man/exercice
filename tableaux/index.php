<?php

require_once ("fonction.php");

$etudiants = ["Pierre", "Paul", "Jacques"];
$pierre = ["nom" => "Jehan", "prenom" => "Pierre"];

var_dump($pierre);

echo $pierre["prenom"];

$etudiants[] = "Elodie";
array_push($etudiants, "Jack");

var_dump($etudiants);

$etudiants[1] = "Jean";
echo $etudiants[1];

echo "<hr>";

$classe = [];

$classe[] = [
    "nom" => "Jehan",
    "prenom" => "Pierre",
    "date_naissance" => new DateTime("1989-06-29")
];

$classe[] = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "date_naissance" => new DateTime("1985-10-15")
];

var_dump($classe);

echo $classe[0]["nom"] . " " . $classe[0]["prenom"];
echo $classe[0]["date_naissance"]->format("d m Y");




require_once ("test_tableau.php");


?>









