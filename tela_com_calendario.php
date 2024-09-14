<?php

require_once 'config.php';
$config = new Config();
$conn = $config->getConn();

$aaa= filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($aaa['enviar'])){
   
    if(!isset($aaa['fisicalab'])){
        $aaa['fisicalab'] = 0;
    }
        if(!isset($aaa['quimicalab'])){
            $aaa['quimicalab'] = 0;
        }
    if(!isset($aaa['biologialab'])){
        $aaa['biologialab'] = 0;
    }
        if(!isset($aaa['ingleslab'])){
        $aaa['ingleslab'] = 0;
        }
    $ADD= "INSERT INTO tabela_teste(fisicalab, quimicalab, biologialab, ingleslab )values (:fisicalab, :quimicalab, :biologialab , :ingleslab)";
    $laboratorios=$conn->prepare($ADD);
    $laboratorios->bindParam(':quimicalab', $aaa['quimicalab'], PDO::PARAM_INT);
    $laboratorios->bindParam(':fisicalab', $aaa['fisicalab'], PDO::PARAM_INT);
    $laboratorios->bindParam(':biologialab', $aaa['biologialab'], PDO::PARAM_INT);
    $laboratorios->bindParam(':ingleslab', $aaa['ingleslab'], PDO::PARAM_INT);
    $laboratorios->execute();

    if($laboratorios->rowCount()){
        echo"cadrastrado pai";
    }else{
        echo"nao cadrastrado pai";
    }
} else{
    echo "nao sucesso";
}
?>
