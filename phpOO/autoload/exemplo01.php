<?php
spl_autoload_register(function($class){
    //var_dump($class);
    require "autoload/" . $class . ".php";
});

$corra = new DelRey();
$carro->acelerar(80);