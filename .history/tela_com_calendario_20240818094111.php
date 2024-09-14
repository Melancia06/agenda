

<?php

require_once 'config.php';

$quimicalab= $_GET['quimicalab'] ?? null;// ou $nome= isset($_GET['nome']) ? $_GET['nome'] : null; ambos são a mesma coisa
$fisicalab= isset($_GET['fisicalab']) ? $_GET['fisicalab'] : null;
print $nome . "<br />" .$email . "<br />" .$telefone;

$insert=    $stmt->prepare("INSERT INTO tabela_teste VALUES (null,:quimicalab, :fisicalab);");
$insert= bindParam(":quimicalab", $quimicalab); // existe o param(para variavel comum com $nome) e o value (para objeto sendo distanciado assim $dados->bindValue(':nome', $objeto->getNome())).
$insert= bindParam(":fisicalab", $fisicalab);
$insert= execute();
?>

?>
   
    



