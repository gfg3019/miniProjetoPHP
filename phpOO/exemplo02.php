<?php
class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }


    public function exibir(){
        return array(
            "Modelo"=>$this->getModelo(),
            "Ano"=>$this->getAno(),
            "Motor"=>$this->getMotor()
        );
    }
}

$golf = new Carro();
$golf->setModelo("GTI");
$golf->setMotor("2.5");
$golf->setAno("2022");
print_r($golf->exibir());
var_dump($golf->exibir());