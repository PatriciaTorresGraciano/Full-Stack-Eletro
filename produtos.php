<?php
require_once("conexao_bd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="shortcut icon" href="./img/icon.png"> 
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<!-- menu -->
<div class="container-fluid"> 
    <?php include_once("navbar.html"); ?>  
</div>
<!-- fim menu -->

<div class="container-fluid cabecalho"><!-- cabeçalho  -->
  <br>
            <div class="row"><!-- Linha Produto e Categoria  -->
                <div class="col-sm-1 col-xs-12"> 
                    <h2 class="text-info">Produtos</h2>
                </div>

                <div class="col-sm-11 col-xs-4"><!-- segunda linha  -->            
                    <div class="dropdown"><!-- dropdown  -->
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                            </button>    
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><!--  dropdownMenuButton -->
                                <ol class="categorias">
                                    <li class="dropdown-item" onclick="exibir_todos()">Todos (12)</li>
                                    <li class="dropdown-item" onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                                    <li class="dropdown-item" onclick="exibir_categoria('fogao')">Fogões (2)</li>
                                    <li class="dropdown-item" onclick="exibir_categoria('microondas')">Microondas (3)</li>
                                    <li class="dropdown-item" onclick="exibir_categoria('lavaRoupas')">Lavadora de roupas(2)</li>
                                    <li class="dropdown-item" onclick="exibir_categoria('lavaLoucas')">Lava-louças (2)</li>
                                </ol>
                            </div><!--  fim dropdownMenuButton -->  
                    </div> <!-- fim dropdown  -->
                </div><!-- fim segunda linha   -->
            </div><!-- Linha Produto e Categoria  -->
</div><!-- fim cabeçalho  -->
    
<div class="container"><hr>
    <div class="row">
        <div class="col-sm-12 col-xs-4" id="produtos">
            <?php
                $selecionar_produtos="select * from produtos";
                $resultado=$conexao->query($selecionar_produtos);
                if($resultado->num_rows>0)
                {
                    while($rows=$resultado->fetch_assoc())
                    {
            ?>  
                <div class="box_conteudo" id="<?php echo $rows["categoria"]; ?>"> 
                    <img src="<?php echo $rows["imagem"]; ?>" width="240px" onMouseOver="destaque(this)" onMouseOut="destaque_voltar_tamanho(this)"><br>
                    <p id="titulo_produto"><?php echo $rows["descricao"]; ?></p><br><hr>
                    <p id="valor_antigo">R$ <?php echo number_format($rows["preco"],2,",","."); ?></p>
                    <p id="valor_atual"> R$ <?php echo number_format($rows["preco_venda"],2,",","."); ?></p><br>
                </div>
            <?php
                    }
                } else 
                    {
                echo"Nenhum produto cadastrdo!";
                    }
            ?>
        </div>

    </div>


    <br><br>
<footer class="rodape">
    <p class="text-info" id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <br>
    <p class="text-secondary" class="copyright">&copy; Recode Pro</p> 
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>