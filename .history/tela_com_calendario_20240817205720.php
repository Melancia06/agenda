

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
var_dump($dados);

$querytabela="SELECT INTO tabela_teste (quimicalab, fisicalab)values (:quimica_cat1, :fisica_cat1)";
$add_tabela=$conexao->prepare($querytabela);
$add_tabela=bindParam(':quimica_cat1', );
}


   
    $fisica = $_POST['fisica_cat1'];
    $quimica = $_POST['quimica_cat1'];

   print $fisica . $quimica;



