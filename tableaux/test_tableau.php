<?php
function additionAge(array  $tab, string $key) : int {
    $ageTotal = 0;

    foreach ($tab as $element) {
        $ageTotal = $ageTotal + $element[$key];
    }

    return $ageTotal;
}

$bureau = [];

$bureau[] = [
"nom" => "Delpierre",
"prenom" => "Monique",
"age" => 57
];

$bureau[] = [
"nom" => "Roquin",
"prenom" => "Jean-Pierre",
"age" => 65
];


$bureau[] = [
"nom" => "Belmoril",
"prenom" => "Sabine",
"age" => 47
];

$age = additionAge($bureau, "age");

?>

<?php foreach ($bureau as $key => $buro) : ?>
<article class " ><?= $key ; ?>
 <h2><?=  $buro['nom']. " " . $buro['prenom']; ?></h2>
<p>Age : <?= $buro['age'] ; ?></p>
</article>
<?php endforeach; ?>


<?= $age; ?>

