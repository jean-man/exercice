<?php

$nb_msg = 55;

if ($nb_msg != 50) {
    echo "Utilisateur VIP";
} else if ($nb_msg > 10) {
    echo "Utilisateur presque VIP";
} else {
    echo "Utilisateur débutant";
}

echo "<hr>";

$is_admin = false;

if (!$is_admin) {
    echo "Pas admin";
}

echo "<hr>";

if ($is_admin || $nb_msg > 50) {
    echo "OK";
}

echo "<hr>";

$nb_joueurs = 4;

switch ($nb_joueurs) {
    case 1:
        echo "Solitaire";
        break;
    case 4:
    case 6:
        echo "Volleyball";
    case 2:
        echo "Tennis";
        break;
    default:
        echo "Football";
}

echo "<hr>";

$message = ($is_admin == true) ? "Administrateur" : "Pas administrateur";

if ($is_admin) {
    echo "Administrateur";
} else {
    echo "Pas administrateur";
}















