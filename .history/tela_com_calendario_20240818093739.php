

<?php


require_once 'conectar.php';

$nome= $_GET['nome'] ?? null;// ou $nome= isset($_GET['nome']) ? $_GET['nome'] : null; ambos são a mesma coisa
$email= isset($_GET['email']) ? $_GET['email'] : null;
$telefone= isset($_GET['fone']) ? $_GET['fone'] : null;
print $nome . "<br />" .$email . "<br />" .$telefone;

$insert=    $stmt->prepare("INSERT INTO clientes VALUES (null,:nome, :email, :telefone);");
$insert= bindParam(":nome", $nome); // existe o param(para variavel comum com $nome) e o value (para objeto sendo distanciado assim $dados->bindValue(':nome', $objeto->getNome())).
$insert= bindParam(":email", $email);
$insert= bindParam(":telefone", $telefone);
$insert= execute();
?>

?>
   
    



