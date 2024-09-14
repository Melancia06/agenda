<?php
if(isset($_POST['submit'])){

    include_once ('connection.php');
    $matricula = $_POST ['matricula'];
    $senha = $_POST['senha'];

   print $matricula . $senha;