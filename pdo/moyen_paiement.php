<?php
require_once "model/database.php";

$moyen_paiements = getAllEntities("moyen_paiement");
?>

<h1>Liste des moyens de paiement</h1>

<?php if (isset($_GET["errcode"])) : ?>
    <p>Une erreur s'est produite !</p>
<?php endif; ?>

<form action="insert_moyen_paiement.php" method="post">
    <input type="text" name="label" placeholder="Libellé">
    <input type="submit">
</form>

<ul>
    <?php foreach ($moyen_paiements as $moyen_paiement) : ?>
        <li>
            <?= $moyen_paiement["label"]; ?>
            <form action="delete_moyen_paiement.php" method="post">
                <input type="hidden" name="id" value="<?= $moyen_paiement["id"]; ?>">
                <input type="submit" value="Supprimer">
            </form>
        </li>
    <?php endforeach; ?>
</ul>