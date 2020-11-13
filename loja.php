<?php
require_once("conexao_bd.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas lojas</title>
    <link rel="shortcut icon" href="./img/icon.png"> 
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link href="navbar.html">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <!-- menu -->
 <?php
 include_once("navbar.html");
 ?>
  </div>
  
 <div class="container-fluid cabecalho">
  <br>
    <h2 class="text-info">Nossas Lojas</h2>
</div>
    <div class="container-fluid conteudo">
    <hr>
  
    <?php

        $selecionar_lojas="SELECT * FROM loja";
        $resultado=$conexao->query($selecionar_lojas);

        if($resultado->num_rows>0){
            while($rows=$resultado->fetch_assoc()){
                
    
    ?> 

    <div class="box_conteudo">
            
        <h3><?php echo $rows['cidade'];?></h3>
        <p class="text-secondary"><?php echo $rows['endereco'];?></p>
        <p class="text-secondary"><?php echo $rows['complemento'];?></p>
        <p class="text-secondary"><?php echo $rows['bairro'];?></p>
        <p class="text-secondary"><?php echo $rows['telefone'];?></p>
            
    </div>
    <?php
        }
    } else {
        echo"Nenhum loja cadastrada!";
    }

    ?>
    </div>
    
    <br>
    <br>
<footer class="rodape">
    <p class="text-info" id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <br>
    <p class="text-secondary" class="copyright" >&copy; Recode Pro</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>