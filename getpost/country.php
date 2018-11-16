<?php

if (!isset($_GET["name"])) {
    echo "Bien essayé !!";
    die;
}
$country_name = $_GET["name"];

?>

<h1><?= $country_name; ?></h1>
