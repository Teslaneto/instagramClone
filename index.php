<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="principal/Css/style.css">
    <link rel="icon" href="principal/img/Instagram-Icon.png">
    <title>Instargam</title>
</head>
<body>
    <div id="container">
	    <div class="container-foto">
	    <img class="foto" alt="" src="principal/img/foto-lado.jpg">
	    </div>
        <div id="Conteudo">
        <img class="logo-form" alt="" src="principal/img/instagram-logo.svg">
                <form action="Class/Validar_login.php" method="POST" class="formSytle">
                    <input type="hidden"  name="url">
                    <input class="input" type="text" name="login" placeholder="Telefone, nome de usuário ou email ">
                    <br>
                    <input class="input" type="password" name="senha" placeholder="Senha">
                    <br>
                    <input class="botao" type="submit" value="Entrar">
                    <p style="color:red;"></p>
                </form>
        </div>
        <div id="form_cria">
            <p class="center">Não tem uma conta? <a class="link" href="cadastro.php">Cadastre-se</a></p>
        </div>
    </div> 
</body>
</html>