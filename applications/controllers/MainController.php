<?php

namespace applications\controllers;

use applications\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }
}
