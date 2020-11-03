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
    <table class="tabelas">
        <tr>
            <td>
                <h3>Rio de Janeiro</h3>
                <p> Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
            </td>
            <td>
                <h3>São Paulo</h3>
                <p> Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </td>
            <td>
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute;vila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </td>
        </tr>
    </table>
<footer class="rodape">
    <p id="formas_pagamento">Formas de pagamento</p>
    <img src="./img/formas_pagamento.png" alt="Formas de Pagamento">
    <br>
    <p class="copyright">&copy; Recode Pro</p>
</footer>
</body>
</html>