<?php session_start(); ?>

    <?php

    require('applications/lib/dev.php');

    use applications\core\Router;

    spl_autoload_register(function ($class) {
        $path = str_replace('\\', '/', $class . '.php'); // автоподключение классов (чтобы было меньше писанины при взятии классов)
        if (file_exists($path)) {
            require $path;
        }
    });



    $rounter = new Router;
    $rounter->run();

    ?>

