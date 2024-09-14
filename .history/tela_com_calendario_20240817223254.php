

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
var_dump($dados);

if(!isset($dados['quimicalab'])){
    $dados['quimicalab'] = null;
}

if(!isset($dados['fisicalab'])){
    $dados['fisicalab'] = null;
}

$querytabela="SELECT INTO tabela_teste (quimicalab, fisicalab)values (:quimicalab, :fisicalab)";
$add_tabela=$conexao->prepare($querytabela);
$add_tabela=bindParam(':quimicalab', $dados['quimicalab'], PDO::PARAM_STR);
$add_tabela=bindParam(':fisicalab', $dados['fisicalab'], PDO::PARAM_STR);

$add_tabela->execute();

if($add_tabela->rowCount()){
    echo "sucesso";
} else{
    echo "nao sucesso";
}
}

?>
   
    



