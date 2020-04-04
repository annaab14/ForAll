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
        font-family: times;
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

    #pop{
        display:none;
        position:absolute;top:50%;left:50%;
        margin-left:-150px;
        margin-top:-100px;padding:10px;
        width:300px;
        height:200px;
        border:1px solid #d0d0d0
    }
 
    </style>
 
</head>
 
<body>
 
    <div id = "Cadastro" class = "TransicaoDeCores">
    
    <br>
    <h1>For All</h1>
    <h3>Cadastro</h3>
    
    <?php
    if (isset($_SESSION['status_cadastro'])):
    ?>

    <div id="pop">

        <a href="#" onclick="document.getElementById('pop').style.display='none';">Fechar</a><br/>
        
        <p>Obrigado por se cadastrar em nosso site!</p>
        <a href = "http://localhost/For_All/tela_login.php" class = "button">Voltar para tela de login</a>
    
    </div>

    <?php 
    endif; 
    unset($_SESSION['status_cadastro']);
    ?>

    <?php
    if (isset($_SESSION['usuario_existe'])):
    ?>

    <div id="pop">

        <a href="#" onclick="document.getElementById('pop').style.display='none';">Voltar para o cadastro</a><br/>
        
        <p>O nome de usuário já existe.</p>
    
    </div>
    
    <?php 
    endif; 
    unset($_SESSION['usuario_existe']);
    ?>

    <?php
    if (isset($_SESSION['email_existe'])):
    ?>

    <div id="pop">

        <a href="#" onclick="document.getElementById('pop').style.display='none';">Voltar para o cadastro</a><br/>

        <p>Já há um usuário cadastrado com esse email.</p>

    </div>

    <?php 
    endif; 
    unset($_SESSION['email_existe']);
    ?>

    <form action= "cadastrar.php"  method= "POST">
    
        <input type = "text" name = "nome" class = "Caixas" placeholder = "Nome de usuário" required><br><br>
        <input type = "email" name = "email" class = "Caixas" placeholder = "Email" required><br><br>
        <input type = "password" name = "senha" class = "Caixas" placeholder = "Senha" required><br><br>
        <input type = "password" name = "senha" class = "Caixas" placeholder = "Confirmação da senha" required><br><br>
        <input type="submit" value="Confirmar cadastro" class= "button"><br><br><br>

    </form>
        
    </div>

</body>
</html>
