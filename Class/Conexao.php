<?php
    $hosname = "localhost";
    $usuario = "root";
    $senha = "root";
    $bancodeDados = "db_instagram";

    $mysqli = new mysqli ($hosname, $usuario, $senha, $bancodeDados);

    if($mysqli->connect_errno){
        echo "CONEXÃO FALHOU:".$mysqli->connect_errno;
    }else{
        echo "CONEXAO BEM SUCEDIDA";
    }

?>