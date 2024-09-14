

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
require_once 'conectar.php';

$quimicalab= $_GET['quimicalab'] ?? null;// ou $nome= isset($_GET['nome']) ? $_GET['nome'] : null; ambos são a mesma coisa
$fisicalab= isset($_GET['fisicalab']) ? $_GET['email'] : null;
$telefone= isset($_GET['fone']) ? $_GET['fone'] : null;
print $nome . "<br />" .$email . "<br />" .$telefone;

$insert=    $stmt->prepare("INSERT INTO tabela_teste VALUES (null,:quimicalab, :fisicalab);");
$insert= bindParam(":quimicalab", $quimicalab); // existe o param(para variavel comum com $nome) e o value (para objeto sendo distanciado assim $dados->bindValue(':nome', $objeto->getNome())).
$insert= bindParam(":fisicalab", $fisicalab);
$insert= bindParam(":telefone", $telefone);
$insert= execute();
?>

?>
   
    



