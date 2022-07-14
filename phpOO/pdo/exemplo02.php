<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");
$stmt = $conn->prepare("INSERT INTO usuario(email, senha, nome) VALUES(:EMAIL, :PASSWORD, :NAME)");
$email = "jojo_todynho@gmail.com";
$senha = "jojo4567";
$nome = "Jojo Todynho";
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":NAME", $nome);
$stmt->execute();
echo "Inserido OK";