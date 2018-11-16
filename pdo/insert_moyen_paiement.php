<?php
require_once "model/database.php";

// Récupérer les données du formulaire
$label = $_POST["label"];

// Envoyer les données en base de données
insertMoyenPaiement($label);

// Rediriger l'utilisateur vers la liste
header("Location: moyen_paiement.php");