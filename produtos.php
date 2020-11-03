<?php
require_once("conexao_bd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="js/funcoes.js"></script>
</head>
<body>
    <!-- menu -->
 <?php
 include_once("menu.html");
 ?>
        <header>
            <h2>Produtos</h2>
        </header>
    <hr>

    <section>
        <h3>Categoria</h3>
        <ol class="categorias">
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaRoupas')">Lavadoura de roupas(2)</li>
            <li onclick="exibir_categoria('lavaLoucas')">Lava-louças (2)</li>
        </ol>

    </section>
    <section class="produtos">
    <?php

        $selecionar_produtos="select * from produtos";
        $resultado=$conexao->query($selecionar_produtos);

        if($resultado->num_rows>0){
            while($rows=$resultado->fetch_assoc()){
                
    
    ?> 
            <div class="box_produto" id="box_<?php echo $rows["categoria"]; ?>">   
            <img src="<?php echo $rows["imagem"]; ?>" width="240px" onclick="destaque(this)">
            <br>
            <p id="titulo_produto"><?php echo $rows["descricao"]; ?></p><br>
            <hr>
            <p id="valor_antigo">R$ <?php echo $rows["preco"]; ?></p>
            <p id="valor_atual">R$ <?php echo $rows["preco_venda"]; ?></p><br>
        </div>
        

    <?php
        }
    } else {
        echo"Nenhum produto cadastrdo!";
    }

    ?>
    
    </section>
    
<footer class="rodape">
    <p id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <p class="copyright">&copy; Recode Pro</p>
</footer>

</body>

</html>