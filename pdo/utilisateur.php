<?php
require_once "model/database.php";

$id = $_GET["id"];

$utilisateur = getOneUtilisateur($id);
$commandes = getAllCommandesByUtilisateur($id);

?>

<h1><?= $utilisateur["fullname"]; ?></h1>
<p>Adresse : <?= $utilisateur["adresse"] . " " . $utilisateur["ville"] . " " . $utilisateur["cp"] ?></p>
<p>Email : <a href="mailto:<?= $utilisateur["email"]; ?>"><?= $utilisateur["email"]; ?></a></p>

<h2><?= count($commandes); ?> commande(s)</h2>

<?php if (count($commandes) > 0) : ?>
    <table>
        <thead>
        <tr>
            <th>Référence</th>
            <th>Date de création</th>
            <th>Moyen de paiement</th>
            <th>Montant</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($commandes as $commande) : ?>
            <tr>
                <td><?= $commande["reference"]; ?></td>
                <td><?= $commande["date_creation"]; ?></td>
                <td><?= $commande["moyen_paiement"]; ?></td>
                <td><?= $commande["montant"]; ?></td>
                <td>
                    <a href="#">Voir plus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>