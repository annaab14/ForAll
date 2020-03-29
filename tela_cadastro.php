<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For All cadastro</title>
 
    <style>
 
        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 100%;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #009999;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #006666;
            width: 250px;
    }

    .button:hover {background-color: #004d4d}

    .button:active {
        background-color: #004d4d;
        box-shadow: 0 5px #006666;
        transform: translateY(4px);}

    .TransicaoDeCores {
        background: linear-gradient(to bottom, #00CED1 0%, white 100%);
        text-align: center;
    }

    .Caixas {
        width: 250px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
 
    h1 {
        color: black;
        font-family: times new roman;
        font-size: 700%;
        text-align: center;
    }

    h3 {
        font-size: 150%; 
        font-family: times new roman;
    }
        
    p {
        color: black;
        font-family: times new roman;
        font-size: 100%;
        text-align: left;
    }

    label {
        font-size: 100%;
    }
 
    </style>
 
</head>
 
<body>
 
    <div id = "Cadastro" class = "TransicaoDeCores">
    
    <br>
    <h1>For All</h1>
    
<?php
if (isset($_SESSION['status_cadastro'])):
?>
<!-- rogério meu anjo vc consegue arrumar esse bloco? Fazer sei la uma caixinha pra aparecer essa mensagem? -->
<div class= "notification is-success">
<p>O cadastro foi efetuado!</p>
<p>Faça seu login <a href="tela_login.php">aqui</a></p>
<?php 
endif; 
unset($_SESSION['status_cadastro']);
?>

<?php
if (isset($_SESSION['usuario_existe'])):
?>
<!-- rogério meu anjo vc consegue arrumar esse bloco? Fazer sei la uma caixinha pra aparecer essa mensagem? -->
<div class= "notification is-info">
<p>O nome de usuário já existe.</p>
<?php 
endif; 
unset($_SESSION['usuario_existe']);
?>

<?php
if (isset($_SESSION['email_existe'])):
?>
<!-- rogério meu anjo vc consegue arrumar esse bloco? Fazer sei la uma caixinha pra aparecer essa mensagem? -->
<div class= "notification is-info">
<p>Já existe uma conta cadastrada com esse e-mail.</p>
<p>Faça seu login <a href="tela_login.php">aqui</a>.</p>
<?php 
endif; 
unset($_SESSION['email_existe']);
?>

    <form action= "cadastrar.php"  method= "POST">
    
        <input type = "text" name = "nome" class = "Caixas" placeholder = "Nome de usuário" required><br><br>
        <input type = "email" name = "email" class = "Caixas" placeholder = "E-mail" required><br><br>
        <input type = "password" name = "senha" class = "Caixas" placeholder = "Senha" required><br><br>
        <input type = "password" name = "confirmacao_senha" class = "Caixas" placeholder = "Confirmação da senha" required><br><br>
        <input type="submit" value="Confirmar cadastro" class= "button">
        <p>Já possui cadastro? Faça seu login <a href="tela_login.php">aqui</a></p>

    </form>
        
    </div>

</body>
</html>
