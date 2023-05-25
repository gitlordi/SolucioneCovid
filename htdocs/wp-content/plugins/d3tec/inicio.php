<?php 
    /*Inicio*/
    ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>Inicio</title>
    <meta charset="UTF-8">
    <title>Tela de Start do Jogo</title>
    <style>
        #seila {
            background-image: url(https://cdn.discordapp.com/attachments/1024141006465159269/1103897286901252186/Fplaneta-unscreen.gif);
            width: 100%;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: contain;
            background-position-x: center;
            display: flex;
            justify-content: center;
            align-items: end;



        }

        body {

            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #048DA9;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: space-between;
        }

        h1 {
            font-size: 2em;
            margin: 0;
            letter-spacing: 0.1em;
            display: flex;

        }

        p {
            font-size: 1em;
            margin: 1em 0 0;
            margin-top: 0.5em;
        }

        button {
            font-size: 1.2em;
            padding: 0.5em 2em;
            margin-top: 2em;
            margin-bottom: 2em;
            background-color: white;
            color: #048DA9;
            letter-spacing: 0.01em;
            cursor: pointer;
            transition: all .3s ease-in-out;
            border-radius: 20px;
            border-color: #048DA9;
            border: solid;
        
        }

        button:hover {
            background-color: #048DA9;
            color: #fff;
        }

        .so_do_butao {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position:absolute;
            bottom:0px;
        }

        @media (max-width: 600px){
            h1 {
                font-size: 22px;
                text-align: center;
            }
            p {
                font-size: 14px;
            }
            #seila {
                background-size: auto;
            }
        }
    </style>
</head>


<body>
    <div id="seila">
        <div class="container">
            <div class="so_do_butao">
                <h1>Você é capaz de proteger o mundo?</h1>
                <p>Responda corretamente e proteja a humanidade</p>
            
               <a href="http://solucionecovid.epizy.com/wp-content/plugins/d3tec/planeta.php"> <button> Iniciar</button></a>
            </div>
        </div>
    </div> 
</body> 
</html>