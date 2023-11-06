<?php

$url = $_SERVER['REQUEST_URI'];

$route = str_replace('/KeepNote/MVC','', $url);

$string = explode('/', $route);

require_once __DIR__. '/Controllers/' .$string[1]. ".php";

$controls = new $string[1]();
$method = $string[2];

if (isset($string[3])) {
    $controls->$method($string[3]);
}else{
    $controls->$method();
}

?>