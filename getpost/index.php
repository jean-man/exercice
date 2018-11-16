<?php

$countries = ["France", "Espagne", "Italie", "Costa Rica"];
$activities = ["Sport", "Film", "Lecture", "Voyage"];

?>

<ul>
    <?php foreach ($countries as $country) : ?>
        <li>
            <a href="country.php?name=<?= $country; ?>">
                <?= $country; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<hr>

<form action="traitement.php" method="post">
    <p>
        <input type="text" name="firstname" placeholder="Prénom">
    </p>
    <p>
        <input type="text" name="lastname" placeholder="Nom">
    </p>
    <p>
        <input type="color" name="color">
    </p>
    <p>
        <!-- Liste des pays -->
        <select name="country">
            <?php foreach ($countries as $country) : ?>
                <option value="<?= $country; ?>">
                    <?= $country; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <label>Sexe</label>
        <input type="radio" name="sexe" value="homme" id="input-homme">
        <label for="input-homme">Homme</label>
        <input type="radio" name="sexe" value="femme" id="input-femme">
        <label for="input-femme">Femme</label>
    </p>
    <p>
        <input type="checkbox" name="newsletter" id="input-newsletter">
        <label for="input-newsletter">Newsletter</label>
    </p>
    <p>
        <label>Activités</label>
        <!-- Liste des activité -->
        <?php foreach ($activities as $key => $activity) : ?>
            <input type="checkbox" name="activities[]" value="<?= strtolower($activity); ?>" id="input-activities-<?= $key; ?>">
            <label for="input-activities-<?= $key; ?>"><?= $activity; ?></label>
        <?php endforeach; ?>
    </p>
    <input type="submit">
</form>