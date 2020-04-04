<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

      .button {
            display: inline-block;
            text-align: center;
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
            width: 200px;
            font-family: times;
        }

        .button:hover {background-color: #004d4d}

        .button:active {
                background-color: #004d4d;
                box-shadow: 0 5px #006666;
                transform: translateY(4px);
        }

        .button2 {
            display: inline-block;
            text-align: center;
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
            width: 50px;
            font-family: times;
    }

        .button2:hover {background-color: #004d4d}

        .button2:active {
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
                font-size: 500%;
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

            .Caixas {
                width: 250px;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
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

            div.galeria {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.galeria:hover {
                border: 1px solid #777;
            }

            div.galeria img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }

            #pop{
                display:none;
                position:absolute;top:50%;left:45%;
                margin-left:-150px;
                margin-top:-100px;padding:10px;
                height:520px;
                width:385px;
                border:2px solid #006666
            }  
 
    </style>

</head>
<body>
    
        <div id = login class = "TransicaoDeCores">

        <br>

        <h1>Perfil do usuário</h1>

        <div id="pop">

        <a class = "button2" href = "#" onclick = "document.getElementById('pop').style.display='none';">Fechar</a><br><br>
        
        <h4>Selecione a imagem de perfil</h4>

            <div class="galeria">
            
                <button><img src="./Imagens/cachorro_marrom.png"
                alt = "Cachorro marrom"></button>
            
            </div>

            <div class="galeria">
            
            <button><img src="./Imagens/cachorro_vermelho.png"
                alt = "Cachorro vermelho"></button>
            
            </div>

            <div class="galeria">
            
                <button><img src="./Imagens/vaca_rosa.png"
                alt = "Vaca cinza" class = "imagem"></button>
            
            </div>

            <div class="galeria">

            <button><img src="./Imagens/vaca_cinza.png"
            alt = "Vaca rosa" class = "imagem"></button>

            </div>
    
        </div>

        <a class = "button" href="#" onclick="document.getElementById('pop').style.display='block';">Escolher imagem de perfil</a>

        </div>

</body>
</html>