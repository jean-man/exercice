<?php
require_once "model/database.php";

// Récupérer les paramètres dans l'URL
$page_rows = isset($_GET["rows"]) ? $_GET["rows"] : 10;
$current_page = isset($_GET["page"]) ? $_GET["page"] : 1;

$page_range = [10, 25, 50, 100];

$current_url = "index.php?rows=" . $page_rows;

// Récupérer le nombre total d'utilisateurs
$nb_utilisateurs = getCountEntities("utilisateur");
// Calculer le nombre total de pages
$nb_pages = ceil($nb_utilisateurs / $page_rows);

// Récupérer la liste des utilisateurs à afficher
$utilisateurs = getAllUtilisateurs($current_page, $page_rows);

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

<a href="moyen_paiement.php">Liste des moyens de paiement</a>

<form action="index.php" method="get">
    <select name="rows">
        <?php foreach ($page_range as $range) : ?>
            <option value="<?= $range; ?>" <?php if($page_rows == $range) : ?>selected<?php endif; ?>>
                <?= $range; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Date de naissance</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($utilisateurs as $utilisateur) : ?>
        <tr>
            <td><?= $utilisateur["nom"]; ?></td>
            <td><?= $utilisateur["prenom"]; ?></td>
            <td><?= $utilisateur["email"]; ?></td>
            <td><?= $utilisateur["date_naissance_format"]; ?></td>
            <td>
                <a href="utilisateur.php?id=<?= $utilisateur["id"]; ?>">Voir plus</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= $current_url; ?>&page=1">Première page</a>
<?php if ($current_page > 1) : ?>
    <a href="<?= $current_url; ?>&page=<?= $current_page - 1; ?>">précédent</a>
<?php else: ?>
    <a href="#">précédent</a>
<?php endif; ?>

<span><?= $current_page; ?> / <?= $nb_pages; ?></span>

<?php if ($current_page < $nb_pages) : ?>
    <a href="<?= $current_url; ?>&page=<?= $current_page + 1; ?>">suivant</a>
<?php else: ?>
    <a href="#">suivant</a>
<?php endif; ?>
<a href="<?= $current_url; ?>&page=<?= $nb_pages; ?>">Dernière page</a>


</body>
</html>