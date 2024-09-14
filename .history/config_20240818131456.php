<?php
$dbhost ="localhost";
$dbUsername ="root";
$dbpassword ="3306";
$dbname="igao";

$conexao = new PDO("mysql:host=$dbhost; port=$dbpassword;dbname=".$dbname,$dbUsername, $dbpassword);



    $quimicalab= $_GET['quimicalab'] ?? null;// ou $nome= isset($_GET['nome']) ? $_GET['nome'] : null; ambos são a mesma coisa

    $fisicalab= isset($_GET['fisicalab']) ? $_GET['fisicalab'] : null;

    echo $quimicalab. $fisicalab;

?>