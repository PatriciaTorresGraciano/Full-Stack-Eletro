<?php
require_once("conexao_bd.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
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
    <h2>Nossas Lojas</h2>
    <hr>
    <?php

        $selecionar_lojas="SELECT * FROM loja";
        $resultado=$conexao->query($selecionar_lojas);

        if($resultado->num_rows>0){
            while($rows=$resultado->fetch_assoc()){
                
    
    ?> 
    <div class="box_conteudo">
            
        <h3><?php echo $rows['cidade'];?></h3>
        <p><?php echo $rows['endereco'];?></p>
        <p><?php echo $rows['complemento'];?></p>
        <p><?php echo $rows['bairro'];?></p>
        <p><?php echo $rows['telefone'];?></p>
            
    </div>
    <?php
        }
    } else {
        echo"Nenhum loja cadastrada!";
    }

    ?>
    </div>
<footer class="rodape">
    <p id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <p class="copyright">&copy; Recode Pro</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>