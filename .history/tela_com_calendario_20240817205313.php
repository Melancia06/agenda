

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
var_dump($dados);

"SELECT INTO tabela_teste (quimicalab, fisicalab)values (":quimicalab, :fisicalab")";
}


   
    $fisica = $_POST['fisica_cat1'];
    $quimica = $_POST['quimica_cat1'];

   print $fisica . $quimica;



