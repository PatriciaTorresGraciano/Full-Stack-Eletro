<?php
$servidor="localhost";
$usuario="root";
$senha="";
$nome_banco="fseletro";

//conexão com o banco de dados

$conexao=mysqli_connect($servidor,$usuario,$senha,$nome_banco);
if (!$conexao){
    die("Falha na conexão com o Banco de Dados" .mysqli_connect_error());
}
?>          