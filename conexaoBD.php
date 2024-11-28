<?php


$servername = "localhost:3307";
$username = "******";
$password = "*****"; 
$dbname = "conpac";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} 


?>
