<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "casadavida";

    /* conexão com o banco de dados */
    $conexao = mysqli_connect($host, $usuario, $senha, $banco) or die
    ("erro na conexao");
    //mysqli_select_db($conexao, $banco);
?>