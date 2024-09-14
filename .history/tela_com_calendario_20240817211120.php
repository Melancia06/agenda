

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
var_dump($dados);

if(!isset[])
$querytabela="SELECT INTO tabela_teste (quimicalab, fisicalab)values (:quimica_cat1, :fisica_cat1)";
$add_tabela=$conexao->prepare($querytabela);
$add_tabela=bindParam(':quimica_cat1', $dados['quimicalab'], PDO::PARAM_STR);
$add_tabela=bindParam(':fisica_cat1', $dados['fisicalab'], PDO::PARAM_STR);

$add_tabela->execute();

if($add_tabela->rowCount()){
    echo "sucesso";
} else{
    echo "nao sucesso";
}
}

?>
   
    



