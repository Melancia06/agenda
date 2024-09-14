<?php
$dbhost ="localhost";
$dbUsername ="root";
$dbpassword ="3306";
$dbname="igao";

$conexao = new PDO("mysql:host=$dbhost; port=$dbpassword;dbname=".$dbname, $dbpassword, );

?>