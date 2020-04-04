<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For All Login</title>
 
    <style>

.button {
            font-family: times;
            display: inline-block;
            padding: 15px 25px;
            font-size: 110%;
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
            transform: translateY(4px);
        }

        .TransicaoDeCores {
            background: linear-gradient(to bottom, #00CED1 0%, white 100%);
            text-align: center;
        }
    
        .Informacoes {
            text-align: left;
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
            border:1px solid #d0d0d0;
        }
 
    </style>
 
</head>
 
<body>
 
    <div id = "Login" class="TransicaoDeCores">
    
    <br>

    <h1>For All</h1>

    <?php
        if (isset($_SESSION['nao_autenticado'])):
    ?>

        <div id="pop">
        <a href="#" onclick="document.getElementById('pop').style.display='none';">Tentar novamente</a><br/>
        
        <p>Dados incorretos</p>
    
        </div>

    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>

    <form action = login.php method=POST>
    
        <br>
        
        <input type = "text" name = "nome" class = "Caixas" placeholder = "Nome de usuário" required><br><br>
        <input type = "password" name = "senha" class = "Caixas" placeholder = "Senha" required><br><br>
        <input type="submit" value="Entrar" class= "button">
        
    </form>

        <br><br><br>

        <a class= "button" href = "http://localhost/For_All/tela_cadastro.php">Cadastre-se</a><br>

        <br><br><br><br><br><br>
    
    </div>
    
    <div id = "Informacoes" class = "Informacoes">
    
    <p>O For All é um website <strong>gratuito</strong>, que tem como objetivo proporcionar a 
    <strong>inclusão</strong> de crianças com deficiência visual e auditiva, por intermédio da leitura.</p>
    
    <p> Para isso contamos com a sua <strong>colaboração</strong>. Como? É simples: Grave áudios e vídeos 
    (em Líbras) de livros infantis e didáticos e nos envie!</p>
    
    <div id = "livro" align="right">

        <img src = "./Imagens/livro_login.png" style = "width:30%" alt = "Livro">
        
    </div>

    </div>

</body>
</html>