<?php
class Pessoa{
    public $nome;
    public function falar(){
        return "O meu nome é ".$this->nome;
    }
}

$genisson = new Pessoa();
$genisson->nome = "Genisson Ferreira";
echo $genisson->falar();