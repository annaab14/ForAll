<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For All Envio de materiais</title>

    <style>

      .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 100%;
            cursor: pointer;
            
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #009999;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #006666;
            width: 350px;
        }

      .button:hover {background-color: #004d4d}

      .button:active {
            background-color: #004d4d;
            box-shadow: 0 5px #006666;
            transform: translateY(4px);
        }

      .TransicaoDeCores {
            background: linear-gradient(to bottom, #00CED1 0%, white 100%);
        }
 
        h1 {
            color: black;
            font-family: times new roman;
            font-size: 700%;
            text-align: center;
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

        .colunaDesenho {
            float: left;
            width: 34.8%;
            padding: 10px;
            height: 300px;
        }

        .colunaBotoes {
            float: left;
            width: 25%;
            padding: 10px;
            height: 300px;
        }

        .conjuntoColunas:after {
            content: "";
            display: table;
            clear: both;
        }
 
    </style>

</head>
<body>
    
    <div id = "Envio" class = "TransicaoDeCores">

    <br>

    <h1>Enviar material</h1>

    <div class="conjuntoColunas">

        <div class="colunaDesenho">

        <img src = "./Imagens/cachorro_envio.png"
        alt = "Cachorro" align = "right" height = "374.5" width = "420">

        </div>

        <div id = "Opções" class="colunaBotoes">
            
        <form action = "http://localhost/For_All_HTML_CSS/Tela_de_Envio.php" method="GET">

            <label><strong>Defina o tipo do material a ser enviado:</strong></label><br><br>
            <input type = "radio" value="v" name = "tipo" id = "v">Videobook <br>
            <input type = "radio" value="a" name = "tipo" id = "a">Audiobook <br><br>

            <label><strong>Quase lá. Selecione o(s) arquivo(s) a ser enviado(s):</strong></label><br><br>
            <input type = "file" id = "envio_mateiral"multiple><br><br>

            <label><strong>Para finalizar, coloque uma foto da capa correspondente ao livro</strong></label><br><br>
            <input type = "file" id = "envio_foto"><br><br><br>
            <input type = "submit" value = "Enviar arquivos" class = "button">

        </form>

        </div>

        </div>
    
</body>
</html>