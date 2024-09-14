<?php
//inclui a conexão que está em outro arquivo
// fazer uma seleção do banco que vai está armazenado as opções que o usuario fez.
require_once 'config.php';
$config = new Config();
$conn = $config->getConn();
$select="SELECT quimicalab, fisicalab, biologialab, ingleslab FROM tabela_teste";
$result=$conn->prepare($select);
$result->execute();

if($result->rowcount() != 0){
    $row_laboratorio = $result->fetch(PDO::FETCH_ASSOC);
    extract($row_laboratorio);
   // echo"quimicalab $quimicalab<br>";
  //  echo"fisicalab $fisicalab<br>";
  //  echo"biologialab $biologialab<br>";
   // echo"ingleslab $ingleslab<br>";
    
}
else{
    echo"fudeu patrão";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css_inicial.css">
    <title>Document</title>
</head>
<body>
    <form action="edicao.php" method="POST">
        <p>Aqui será feito a seleção</p>
        <div class="campo_favorito">
            <h4 class="man">Escolha uma opção para autalizar:
                <br><br>
                <?php
                if(isset($row_laboratorio['fisicalab']) AND ($row_laboratorio['fisicalab'] == 1)){
                    $selecionado = '<label>Laboratório de Física</label>'.'<input type="checkbox" name="fisicalab" value="1" checked '. '<br><br>';
                }else{
                    $selecionado = "";
                }
                         ?>
              
                     <?php echo $selecionado;  ?>
                
                <?php
                if(isset($row_laboratorio['quimicalab']) AND ($row_laboratorio['quimicalab'] == 1)){
                    $selecionado = ' <label>Laboratório de Química</label>'.'<input type="checkbox" name="quimicalab" value="1" checked '. ' <br><br>';
                }else{
                    $selecionado = "";
                }
                         ?>
               
                   <?php echo $selecionado;  ?>
               
                <?php
                if(isset($row_laboratorio['biologialab']) AND ($row_laboratorio['biologialab'] == 1)){
                    $selecionado = '<label>Laboratório de Biologia</label>' . '<input type="checkbox" name="biologialab" checked value="1"' . ' <br><br>';
                }else{
                    $selecionado = "";
                }
                         ?>
              
                     <?php echo $selecionado;  ?>
               
                <?php
                if(isset($row_laboratorio['ingleslab']) AND ($row_laboratorio['ingleslab'] == 1)){
                    $selecionado ='<label>Laboratório de Inglês </label>' . '<input type="checkbox" name="ingleslab" checked value="1" ' . '<br><br>';
                }else{
                    $selecionado = "";
                }
                         ?>
              
             
                     <?php echo $selecionado;  ?>
                    
               
              
                <input type="submit" name="atualizar" value="adicionar mais?">
            </h4>
        </div>
    </form>
</body>

</html>







