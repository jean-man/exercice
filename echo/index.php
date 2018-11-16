<?php

// Déclaration des variables
$nom = 'Dupont';
$prenom = "Jean";
$fullname = $nom . " " . $prenom;
$fullname = "Bonjour $nom $prenom";
$fullname = 'Bonjour $nom $prenom';
$message = 'J\'ai compris le PHP';
$age = 22;
$taille = 1.80;
$homme = true;
$profession = null;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php $color = "green"; ?>

    <h1 style="color: <?php echo $color; ?>">
        <?php echo "Bonjour"; ?>
    </h1>
    <?php echo "<h1>Bonjour</h1>" ?>

    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?= $prenom; ?></li>
        <li>Message : <?= $message; ?></li>
        <li>Age : <?= $age; ?></li>
        <li>Taille : <?= $taille; ?></li>
        <li>Homme : <?= $homme; ?></li>
        <li>Profession : <?= $profession; ?></li>
    </ul>

    <?php
    $note1 = 12;
    $note2 = 10;
    echo "Différence entre les deux notes : " . abs($note2 - $note1);
    echo "<br>";
    echo "Moyenne des deux notes : " . ($note1 + $note2) / 2;
    ?>

    <hr>

    <?php $date_naissance = new DateTime("1980-12-15 21:42:32"); ?>

    <p>Votre date de naissance : <?= $date_naissance->format("l j F Y"); ?></p>

    <?php $today = new DateTime(); ?>
    <?php echo $today->diff($date_naissance)->days; ?>

    <hr>

    <?php define("SITE_URL", "http://www.google.com"); ?>

    <?= SITE_URL; ?>


</body>
</html>