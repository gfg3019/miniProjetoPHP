<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");
$stmt = $conn->prepare("DELETE FROM usuario  WHERE id = :ID");
$id = 1;
$stmt->bindParam(":ID", $id);
$stmt->execute();
echo "delete OK";