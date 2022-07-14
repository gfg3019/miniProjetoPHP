<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM usuario  WHERE id = ?");
$id = 2;
$stmt->execute(array($id));
//$conn->rollback();
$conn->commit();
echo "delete OK";