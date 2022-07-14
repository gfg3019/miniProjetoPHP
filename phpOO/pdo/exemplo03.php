<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");
$stmt = $conn->prepare("UPDATE usuario SET email = :EMAIL, senha = :PASSWORD, nome = :NAME WHERE id = :ID");
$id = 1;
$email = "jhon_snow@gmail.com";
$senha = "lobo45";
$nome = "Jhon Snow";
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":NAME", $nome);
$stmt->bindParam(":ID", $id);
$stmt->execute();
echo "Alterado OK";