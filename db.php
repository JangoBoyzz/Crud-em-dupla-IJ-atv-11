<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "crud_ij_duo";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Conexão Falhou: " . $conn -> connect_error);
}

?>