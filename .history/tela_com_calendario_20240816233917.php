<?php
if(isset($_POST['submit'])){

    include_once ('connection.php');
    $fisica = $_POST ['fisica'];
    $quimica = $_POST['quimica'];

   print $fisica . $senha;
}