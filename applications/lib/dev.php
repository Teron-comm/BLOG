<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

function debug($str) {
 echo '<pre>';
 var_dump($str) ;  // ДЕБАГ
 echo '</pre>';
}