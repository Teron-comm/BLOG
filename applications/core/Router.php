<?php

namespace applications\core;

use applications\core\View;

class Router
{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        $arr = require 'applications/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        } // здесь мы подключаем маршруты и добовляем в масссив arr
        // debug($arr);
    }
    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    } // делаем из роута регулярное выражение
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
                // debug($matches)
            }; //проверка марщрута
        }
        return false;
    }
    public function run()
    {
        if ($this->match()) {
            $path = 'applications\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'] . 'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::erroeCode(404);
                }
            } else {
                View::erroeCode(404);
            }
        } else {
            View::erroeCode(404);
        }
    }
} // запуск роута
