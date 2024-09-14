<?php

require_once 'config.php';
$config = new Config();
$conn = $config->getConn();

$aaa= filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(!empty($aaa['atualizei'])){
   
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
    $UPDATE= "UPDATE tabela_teste SET fisicalab=:fisicalab, quimicalab=:quimicalab, biologialab=:biologialab,  ingleslab=ingleslab" ;
    $UPDATE_LABORATORIO=$conn->prepare($UPDATE);
    $UPDATE_LABORATORIO->bindParam(':quimicalab', $aaa['quimicalab'], PDO::PARAM_INT);
    $UPDATE_LABORATORIO->bindParam(':fisicalab', $aaa['fisicalab'], PDO::PARAM_INT);
    $UPDATE_LABORATORIO->bindParam(':biologialab', $aaa['biologialab'], PDO::PARAM_INT);
    $UPDATE_LABORATORIO->bindParam(':ingleslab', $aaa['ingleslab'], PDO::PARAM_INT);
    $UPDATE_LABORATORIO->execute()
    IF(){
        ECHO"VAMOS NESSA";
    }
    ELSE{
        ECHO"FUDEU PAI";
    }
}
      
    
?>
