<?php

namespace Src\Core;

class App
{
    private $di;

    public $router;

    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    public function run()
    {
        require_once CONFIG_DIR.'routes.php';

        var_dump($this->router->routes);
        die();
    }
}