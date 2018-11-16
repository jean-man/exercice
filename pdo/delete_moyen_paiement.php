<?php
require_once "model/database.php";

// Récupérer l'identifiant de la ligne à supprimer en BDD
$id = $_POST["id"];

// Appel de la fonction pour supprimer
$errcode = deleteEntity("moyen_paiement", $id);

// Redirection de l'utilisateur
if ($errcode) {
    header("Location: moyen_paiement.php?errcode=" . $errcode);
} else {
    header("Location: moyen_paiement.php");
}