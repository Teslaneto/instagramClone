<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="principal/Css/form_cadastro.css">
    <link rel="icon" href="principal/img/Instagram-Icon.png">
    <title>Criar- Conta</title>
</head>
<body>
    <div id="container">
        <div class="Conteudo">
            <form action="Class/Cadastro.php" method="POST">
            <img class="logo-form" alt="" src="principal/img/instagram-logo.svg">
                <input class="input" type="text" name="nome" placeholder="Informe seu Primeiro Nome">
                <input class="input" type="text" name="email" placeholder="Informe seu Email">
                <input class="input" type="password" name="senha" placeholder="Senha">
                <input class="botao" type="submit" value="Cadastre-se">
            </form>
        </div>
    </div>
</body>
</html>