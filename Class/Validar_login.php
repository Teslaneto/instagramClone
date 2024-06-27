<?php
include "Conexao.php";
session_start();

if(isset($_POST["login"]) && isset($_POST["senha"])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query_select = "SELECT email, senha FROM tb_logins WHERE email = '$login' AND senha = '$senha' ";

    $result = $mysqli->query($query_select);

    if($result->num_rows > 0){
        $_SESSION['autenticar'] = "SIM";
        header("Location: /SQL/inicio.php");
    }else{
        echo "Login não informado";
        $_SESSION['autenticar'] = "NAO";
        header("Location: /SQL/index.php");
    }
}else{
    $_SESSION['autenticar'] = "NAO";
    header("Location: /SQL/index.php");
}
?>