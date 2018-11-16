<?php

namespace App\Controller;


use Core\Controller\Controller;

abstract class BaseController extends Controller
{

    public function __construct()
    {
        $this->viewPath = __DIR__ . "/../Views/";
        $this->template = "default";
    }

}