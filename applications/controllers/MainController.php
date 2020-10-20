<?php

namespace applications\controllers;

use applications\core\Controller;
use applications\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $db = new Db;
        $db->query('SELECT user FROM users WHERE id = 1');
        $this->view->render('Главная страница');
    }
} 

// главный контроллер, main page