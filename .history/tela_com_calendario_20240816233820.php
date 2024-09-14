<?php
if(isset($_POST['submit'])){

    include_once ('connection.php');
    $fisica = $_POST ['fisica'];
    $senha = $_POST['senha'];

   print $matricula . $senha;
}