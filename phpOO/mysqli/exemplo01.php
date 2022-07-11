<?php
$conn = new mysqli("localhost", "root", "root", "bd");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
//$stmt = $conn->prepare("INSERT INTO ESTADOS (NOME, SIGLA, REGIAO,POPULACAO) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("")