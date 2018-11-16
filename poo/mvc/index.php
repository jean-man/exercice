<?php

require_once "core/Autoloader.php";

use Core\Autoloader;

define("CONTROLLER_NAMESPACE", "\App\Controller\\");

Autoloader::register();

$dir = str_replace("\\", "/", __DIR__);
$siteRoot = substr($dir, strlen($_SERVER["DOCUMENT_ROOT"]), strlen($dir)) . "/";
$currentUrl = str_replace($siteRoot, "", $_SERVER["REQUEST_URI"]);
$parts = explode("/", $currentUrl);

$controller_name = CONTROLLER_NAMESPACE . "DefaultController"; // Default controller
$action = "indexAction"; // Default action
if ($parts[0]) {
    $controller_name = CONTROLLER_NAMESPACE . ucfirst($parts[0]) . "Controller";
    if (isset($parts[1])) {
        $action = $parts[1] . "Action";
    }
}
/** @var \Core\Controller\Controller $controller */
$controller = new $controller_name();
$controller->setDatabase(new \Core\Database\Database("vente_en_ligne"));
$controller->$action();