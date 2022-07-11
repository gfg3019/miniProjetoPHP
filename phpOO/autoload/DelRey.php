<?php
spl_autoload_register(function($class){
    require_once("autoload/" . $class . ".php");
});
class DelRey extends Automovel{
    public function empurrar(){

    }
}