<?php
$dbhost ="localhost";
$dbUsername ="root";
$dbpassword ="3306";
$dbname="igaaao";

$conexao = new PDO("mysql:host=$dbhost; port=$dbpassword;dbname=".$dbname,$dbUsername, $dbpassword);

?>