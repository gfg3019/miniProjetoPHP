<?php
spl_autoload_register(function($class){
    //var_dump($class);
    require "autoload/" . $class . ".php";
});

spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
        require_once($nomeClasse.'.php');
    }
});
$corra = new DelRey();
$carro->acelerar(80);