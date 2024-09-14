<?php
//inclui a conexão que está em outro arquivo
// fazer uma seleção do banco que vai está armazenado as opções que o usuario fez.

$select="SELECT ID, quimicalab, fisicalab FROM tabela_teste";
$result=$conexao->prepare($select);
$result->execute();

while($row_teste = $result->fetch(PDO::FETCH_ASSOC)){
    extract($row_teste);
    echo"ID $id<br>"; // mesma coisa que $row_teste['id'] ou seja ele faz um extract fazendo com que minhas variaveis sejam identificada como variave
    echo"quimicalab $quimicalab<br>";
    echo"fisicalab $fisicalab<br>";
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seleção das opções</title>
</head>
<body>
    
</body>
</html>

