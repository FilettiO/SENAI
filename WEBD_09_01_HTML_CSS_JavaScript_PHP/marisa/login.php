<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo_favicon.webp" sizes="48x48" type="image/x-icon"/>
    
    <style type="text/css">@import url("css/config_ini.css");</style>
    <style type="text/css">@import url("css/login.css");</style>

    <script type="text/javascript" src="js/jquery_4_0.js"></script>
    <script type="text/javascript" src="js/login.js"></script>

    <title>Marisa | Login</title>
</head>
<body>
 <?php include("includes/topo.php");?>
    <div class="login">
        <form action="" method="">
            <h3>Faça seu login</h3>
            <p>E-mail ou CPF*</p>
            <input type="text" name="user" placeholder="Informe seu e-mail ou CPF" class="inp" id="user_id"/>
            <p>Senha*</p>
            <input type="password" name="senha" placeholder="Informe sua senha" class="inp" id="senha_id"/>
            <a href="" class="forgot">Esqueceu sua senha?</a>
            <input type="submit" value="Entrar" class="btnn" onclick="enviarDadosLogin();"/>
            <b>Ainda não tem um cadastro? <a href="cadastro.php">Crie sua conta</a></b>
        </form>
    </div>
 <?php include("includes/rodape.php");?>
</body>
</html>