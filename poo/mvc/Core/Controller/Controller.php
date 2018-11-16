<?php

namespace Core\Controller;


use Core\Database\Database;

abstract class Controller
{

    protected $viewPath;
    protected $template;
    /** @var Database $database */
    private $database;

    protected function render($view, $variables = [])
    {
        ob_start(); // Start buffering the output
        extract($variables); // Convert array to variables
        require($this->viewPath . $view . '.php');
        $content = ob_get_clean(); // Store the output in a variable
        require($this->viewPath . $this->template . '.php');
    }

    /**
     * @return Database
     */
    public function getDatabase(): Database
    {
        return $this->database;
    }

    /**
     * @param Database $database
     */
    public function setDatabase(Database $database): void
    {
        $this->database = $database;
    }

}

