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
    <title >Contatos</title>
    <link rel="shortcut icon" href="./img/icon.png">  
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
 </div>
 <div class="container-fluid cabecalho">
  <br>
    <h2 class="text-info">Contatos</h2>
</div>
    <div class="container-fluid conteudo">
    <hr>
   
</div>
<div class="container">
    <h2 class="text-secondary">Envie sua mensagem</h2>
<form method="post" action="contato.php">

  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Nome</b></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Mensagem</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="mensagem"></textarea>
  </div>
<div class="row">
<div class="col-sm-5 col-xs-12"></div>
  <button type="submit" class="btn btn-success col-sm-2 col-xs-12" onClick="limparCampos()">Enviar</button>

</div>
</form>
<?php

$selecionar_produtos="select * from comentarios";
$resultado=$conexao->query($selecionar_produtos);

if($resultado->num_rows>0){
    while($rows=$resultado->fetch_assoc()){
        echo "<b>Data: </b>", $rows['data'],"<br>";
        echo "<b>Nome: </b>", $rows['nome'],"<br>";
        echo "<b>Mensagem: </b>", $rows['mensagem'],"<br>";
        echo "<hr>";
        
    }
} else {
echo "Nenhum comentário ainda!";
}
       
$conexao->close();
?>

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
<br><br>
    
<footer class="rodape">
    <p class="text-info" id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <br>
    <p class="text-secondary" class="copyright">&copy; Recode Pro</p>
    
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>