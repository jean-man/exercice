<?php

// var_dump($_POST);die;

$nom = $_POST["lastname"];
$prenom = $_POST["firstname"];
$couleur = $_POST["color"];
$nationalite = $_POST["country"];
$sexe = $_POST["sexe"];
$newsletter = isset($_POST["newsletter"]);
$activities = isset($_POST["activities"]) ? $_POST["activities"] : [];

?>

<style>
    h1 {
        color: <?= $couleur; ?>;
    }
</style>

<script>
    alert("<?= $couleur; ?>");
</script>

<h1><?= $prenom . " " . $nom; ?></h1>

<p>Nationalité : <?= $nationalite; ?></p>
<p>Sexe : <?= $sexe; ?></p>
<p>
    Newsletter :
    <?php if ($newsletter) : ?>
        Oui
    <?php else: ?>
        Non
        <button>S'abonner</button>
    <?php endif; ?>
</p>
<p>Activités</p>
<?php if (count($activities) > 0) : ?>
    <ul>
        <?php foreach ($activities as $activity) : ?>
            <li><?= $activity; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucune activité</p>
<?php endif; ?>
