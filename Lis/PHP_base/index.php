<?php
//recibe todas las peticiones 
include_once 'Controllers/EditorialesController.php';
include_once 'Controllers/indexController.php';
$url = $_SERVER['REQUEST_URI'];

const PATH='http://localhost:81/PHP_base';
$slices=explode('/',$url);
print_r($slices);
$controller = empty($slices[2])?"IndexController":$slices[2]."Controller";
$method = empty( $slices[3])?"index":$slices[3];
$param = empty($slices[4])?[]:array_slice($slices, 4);

$cont = new $controller;
$cont->$method($param);

