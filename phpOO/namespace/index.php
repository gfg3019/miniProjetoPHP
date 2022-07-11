<?php
require_once("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setNome('Genisson Ferreira');
$cad->setEmail('genissongomes@gamil.com');
$cad->setSenha('123456');
//echo $cad;
$cad->registrarVenda();