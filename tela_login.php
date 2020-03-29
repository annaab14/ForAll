<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
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
 
    </style>
 
</head>
 
<body>
 
    <div id = "Login" class="TransicaoDeCores">
    
    <br>

    <h1>For All</h1>

    <!-- esse bloco tb tem q ficar bonitinho kkkkk-->
<?php
if (isset($_SESSION['nao_autenticado'])):
?>
<div class="notification is-danger">
<p>Nome de usuário ou senha inválidos.</p>
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

        <a class= "button" href = "tela_cadastro.php">Cadastre-se</a><br>
        
        <br><br><br><br><br><br>
    
    </div>
    
    <div class = "Informacoes">
    
    <p>O For All é um website <strong>gratuito</strong>, que tem como objetivo proporcionar a <strong>inclusão</strong> de crianças com deficiência visual e auditiva, por intermédio da leitura.</p><br>
    <p> Para isso contamos com a sua <strong>colaboração</strong>. Como? É simples:
    <ul>
        <li>Grave áudios de livros infantis e didáticos;</li>
        <li>Grave vídeos de livros infantis e didáticos (em líbras);</li>
    </ul>
    </p>
    
    <div class="imgcanto" align="right">

        <img src = "./Imagens_Usadas/livro_login.png" style = "width:30%" alt = "Livro">
        
    </div>

    </div>

</body>
</html>