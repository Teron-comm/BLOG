<?php

namespace applications\core;


class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path  = $route['controller'] . '/' . $route['action'];
    }
    public function render($title, $vars = [])
    {
        extract($vars);
        if (file_exists('applications/views/' . $this->path . '.php')) {
            ob_start();
            require 'applications/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'applications/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'Вид не найден: ' . $this->path;
        }
    }
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
    public static function erroeCode($code)
    {
        http_response_code($code);
        require 'applications/views/errors/' . $code . '.php';
        exit;
    }
}

// Подключение View (класс используется в Main контроллере)