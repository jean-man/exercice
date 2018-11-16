<?php

$i = 3;

while ($i > 0) {
    echo $i . "<br>";
    $i--;
}

echo "Bonne année !!";

echo "<hr>";

for ($i = 0; $i <= 100; $i = $i + 10) {
    echo "Chargement en cours, $i% effectué <br>";
}

echo "<hr>";

$etudiants = ["Pierre", "Paul", "Jacques"];

for ($i = 0; $i < count($etudiants); $i++) {
    echo $etudiants[$i];
    if ($i != count($etudiants) - 1) {
        echo ", ";
    } else {
        echo ".";
    }
}

echo "<br>";

$message = "";
for ($i = 0; $i < count($etudiants); $i++) {
    $message = $message . $etudiants[$i] . ", ";
}

echo substr($message, 0, -2) . ".";

echo "<hr>";

foreach ($etudiants as $i => $etudiant) {
    echo $etudiant;
    if ($i != count($etudiants) - 1) {
        echo ", ";
    } else {
        echo ".";
    }
}

$i = 0;

do {
    echo "test";
} while ($i > 0);

















