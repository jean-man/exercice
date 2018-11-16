<?php

namespace App\Controller;


class DefaultController extends BaseController
{

    public function indexAction()
    {
        $user = $this->getDatabase()->query("SELECT * FROM utilisateur WHERE id = 1", null, true);
        $this->render("default/index", ["user" => $user]);
    }

}