<?php
    $hosname = "localhost";
    $usuario = "root";
    $senha = "root";
    $bancodeDados = "db_instagram";
    $porta = 8080;

    $mysqli = new mysqli ($hosname, $usuario, $senha, $bancodeDados, $porta);

    if($mysqli->connect_errno){
        echo "CONEXÃO FALHOU:".$mysqli->connect_errno;
    }else{
        echo "CONEXAO BEM SUCEDIDA";
    }

?>