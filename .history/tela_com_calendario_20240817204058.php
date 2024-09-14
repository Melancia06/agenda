

<?php

require_once'config.php';

if(!empty($dados['enviar'])){
    
}
if(isset($_POST['enviar'])){

   
    $fisica = $_POST['fisica_cat1'];
    $quimica = $_POST['quimica_cat1'];

   print $fisica . $quimica;
 
}


