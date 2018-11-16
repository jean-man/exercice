<?php

function medialib_autoloader($class_name)
{
    $class_name = str_replace("\\", "/", $class_name);
    require_once $class_name . ".php";
}

spl_autoload_register('medialib_autoloader');

use MediaLib\Picture;
use MediaLib\Video\Youtube;

function showVideoCode(\MediaLib\Video\Video $video) {
    echo $video->getCode();
}

$input = new \TagGenerator\Tag("input");
$input->addAttribute("type", "text");
$input->addAttribute("name", "firstname");
$input->addAttribute("placeholder", "Saisissez votre prénom");
$input->render();

echo "<hr>";

$audio = new \MediaLib\Audio("ma_music.mp3");
$audio->setAutoplay(true);

echo "<hr>";

$media = new Picture("https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png");
$media->render();

echo "<hr>";

$video = new Youtube("https://www.youtube.com/watch?v=9vJ3-HNJU9U");
showVideoCode($video);