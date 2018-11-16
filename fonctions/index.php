<?php
require_once "functions.php";

$filename = "cv.pdf";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<i class="fa <?= faFileIcon($filename); ?>"></i>
<?php displayFaFileIcon($filename, 4.7, ["fa-spin", "fa-3x"]); ?>

<hr>

<?= getUrl(); ?>

<hr>

<?php displayPlayer("https://vimeo.com/54985565", ["allowfullsreen" => true, "height" => 300, "width" => 450]); ?>
<?php displayPlayer("https://www.youtube.com/watch?v=ySN5Wnu88nE&test=machin", ["allowfullsreen" => true]); ?>


</body>
</html>
