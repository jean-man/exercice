<?php


namespace App\controller;

use Core\Controller\Controller;

class UserController extends Controller

{
    public function __construct()
    {
        $this->viewPath = __DIR__ . "/../Views/";
        $this->template = "default";
    }

    public function profileAction()

    {
        $this->render("user/profile");
    }

}