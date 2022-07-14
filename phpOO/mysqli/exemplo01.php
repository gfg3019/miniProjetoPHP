<?php
$conn = new mysqli("localhost", "root", "", "dbphp");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO usuario (email, senha, nome) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $email, $pass, $name);
$email = "usuario@usuario.com";
$pass = "12345";
$name = "João";
$stmt->execute();