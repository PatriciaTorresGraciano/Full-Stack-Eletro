<?php
require_once("conexao_bd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>
<body>
    <!-- menu -->
 <?php
 include_once("menu.html");
 ?>
    <h2>Nossas lojas</h2>
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
<footer class="rodape">
    <p id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <p class="copyright">&copy; Recode Pro</p>
</footer>
</body>
</html>