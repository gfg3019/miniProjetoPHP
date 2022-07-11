<?php
spl_autoload_register(function($nameClass){
    $nameClass = str_replace('\\', DIRECTORY_SEPARATOR, $nameClass);
    $dirClass = 'class';
    $path = $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php';
    if(file_exists($path)){
        require $path;
    }
});
