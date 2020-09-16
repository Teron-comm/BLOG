<?php

namespace applications\controllers;

use applications\core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        $this->view->render('Вход');
    }
    public function registerAction()
    {

        $this->view->render('Регистрация');
    }
}

// контроллер аккаунта