<?php
$conn = new mysqli("localhost", "root", "", "dbphp");
if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM usuario ORDER BY nome");
$data = array();

while($row = $result->fetch_assoc()){
    array_push($data, $row);
    //var_dump($row);
}

echo json_encode($data);