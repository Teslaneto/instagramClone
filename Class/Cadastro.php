<?php
include("Conexao.php");

if(isset($_POST["nome"]) && isset($_POST["email"]) 
    && isset($_POST["senha"]) ){

    $nome = $_POST["nome"];  
    $email = $_POST["email"];     
    $senha = $_POST["senha"]; 
    
    $query_check = $mysqli->prepare("SELECT email FROM tb_logins WHERE email = ?");
    $query_check->bind_param("s", $email);
    $query_check->execute();
    $query_check->store_result();//Transfere um conjunto de resultados da última consulta

    if($query_check->num_rows() > 0){
        header("Location: /SQL/cadastro.php");
        echo "<p>Esse E-mail já existe no Banco de Dados</p>";
    }else{

    $query_insert = $mysqli->prepare("INSERT INTO tb_logins (nomes, email, senha) VALUES (?, ?, ?)");
    $query_insert->bind_param("sss", $nome, $email, $senha);

    if($query_insert->execute()){
        header("Location: /SQL/index.php");
        echo "Conta criada com Sucesso!";
    }else{
        header("Location: /SQL/index.php");
        echo "Conta não foi Criada";
    }
}
}else{
    header("Location: /SQL/index.php");
}

?>