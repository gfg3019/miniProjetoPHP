<?php
class Sql extends PDO{
    private $connection;
    
    public function __construct(){//conequição
        $this->connection = new PDO("mysql:host=localhost;dbname=PROJETO", "root", "root");
    }

    private function setParams($stament, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $stament->bindParam($key, $value);
        }
    }

    private function setParam($stament, $key, $value){
        $stament->bindParam($key, $value);
    }

    public function myQuery($rawQuery, $params = array()){
        $stmt = $this->connection->prepare($rawQuery);
        foreach($params as $key => $value){
            $stmt->bindParam($key, $value);
        }
    }

}