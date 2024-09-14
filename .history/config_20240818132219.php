<?php
$dbhost ="localhost";
$dbUsername ="root";
$dbpassword ="3306";
$dbname="igao";

$conexao = new PDO("mysql:host=$dbhost; port=$dbpassword;dbname=".$dbname,$dbUsername, $dbpassword);



    $quimicalab= $_POST['quimicalab'] ?? null;// ou $nome= isset($_GET['nome']) ? $_GET['nome'] : null; ambos são a mesma coisa

    $fisicalab= $_POST['fisicalab'] ? $_POST['fisicalab'] : null;

        if($quimicalab != ""){
            
            $quimicalab="checked";
        }else{
            $quimicalab="";
        }
?>
 <input type="radio" required name="quimicalab" id="quimica" value="quimica" >sim