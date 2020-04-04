<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    </style>

</head>
<body>

    <h4>Selecione a imagem de perfil</h4>

    <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
        <img src="./Imagens_Usadas/cachorros_perfil_marrom_original.png" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
        <img src="./Imagens_Usadas/cachorros_perfil_vermelho_original.png" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
        <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
        <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
    </div>

</body>
</html>