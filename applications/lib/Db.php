<?php

namespace applications\lib;

use PDO;

class Db
{
    protected $db;
    public function __construct()
    {
        $config =  require 'applications/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'],$config['password']);
    }
    public function query($sql) {
        $this->db->query($sql);
    }
}

// Запросы в бд
