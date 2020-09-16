<?php

namespace applications\core;

use applications\core\View;

abstract class Controller
{
    public $route;

    public $view;
    public function __construct($route)
    {

        $this->route =  $route; 
        $this->view = new View($route);

    }
}

// контроллер, строит страницу по объекту View