

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
var_dump($dados);

$add_tabela="SELECT INTO tabela_teste (quimicalab, fisicalab)values (:quimica_cat1, :fisica_cat1)";
$conexao=
}


   
    $fisica = $_POST['fisica_cat1'];
    $quimica = $_POST['quimica_cat1'];

   print $fisica . $quimica;



