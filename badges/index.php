<?php
// Déclaration des variables
$is_admin = true;
$is_male = false;
$nb_msg = 52;
$today = new DateTime();
$registration_date = new DateTime("2018-10-25");
$registration_days = $registration_date->diff($today)->days;
$birthdate = new DateTime("1990-10-31");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
    </head>
    <body>

        <h1>Mon forum</h1>
        <!-- Code temporaire à supprimer avant la mise en ligne -->
        <fieldset>
            <legend>Badges disponibles</legend>
            <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
            <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
            <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
            <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
            <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
            <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
            <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
            <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>
            <i class="fa fa-2x fa-border fa-user-plus" title="VIP"></i>
        </fieldset>

        <?php if ($is_admin) : ?>
            <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
        <?php endif; ?>

        <?php if ($is_male) : ?>
            <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
        <?php else: ?>
            <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
        <?php endif; ?>

        <?php if ($nb_msg < 50) : ?>
            <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
        <?php elseif ($nb_msg <= 100) : ?>
            <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
        <?php else : ?>
            <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>
        <?php endif; ?>

        <?php if ($registration_days < 30 && $nb_msg > 50) : ?>
            <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
        <?php elseif ($registration_days > 365 || $nb_msg > 100) : ?>
            <i class="fa fa-2x fa-border fa-user-plus" title="VIP"></i>
        <?php endif; ?>

        <?php if ($birthdate->format("d-m") == $today->format("d-m")) : ?>
            <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
        <?php endif; ?>

    </body>
</html>









