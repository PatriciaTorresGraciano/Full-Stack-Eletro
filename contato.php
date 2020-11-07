<?php
require_once("conexao_bd.php");

if(isset($_POST['nome']) && isset($_POST['mensagem'])){
    $nome=$_POST['nome'];
    $mensagem=$_POST['mensagem'];
    
    $sql="insert into comentarios (nome,mensagem) values('$nome','$mensagem')";
    $resultado=$conexao->query($sql);

    header("Location: contato.php");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container-fluid">
<body onload="limparCampos()"> 
 <!-- menu -->
 <?php
 include_once("navbar.html");
 ?>
    <h2>Contato</h2>
    <hr>
    <div class="box_contato">
        <div id="contato">
            <img src="./img/icon_email.png" width="40px">
                contato@fullstackeletro.com
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div id="contato">
            <img src="./img/logo_whatsapp.png" width="50px">
                (11) 99999-9999
        </div>
    </div>
</div>
    

<form method="post" action="contato.php">
    Nome:<br>
    <input type="text" name="nome" style="widht:500px" value=""><br><br>
    Mensagem:<br>
    <input type="text" name="mensagem" style="widht:500px" value=""><br><br>

    <input type="submit" name="submit" value="Enviar" value="" onClick="limparCampos()"><br><br><br>

</form>

<?php

$selecionar_produtos="select * from comentarios";
$resultado=$conexao->query($selecionar_produtos);

if($resultado->num_rows>0){
    while($rows=$resultado->fetch_assoc()){
        echo "Data: ", $rows['data'],"<br>";
        echo "Nome: ", $rows['nome'],"<br>";
        echo "Mensagem: ", $rows['mensagem'],"<br>";
        echo "<hr>";
        
    }
} else {
echo "Nenhum comentário ainda!";
}
       
$conexao->close();
?> 
    

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