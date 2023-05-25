<?php 
    /*planeta*/
    include_once("conexao.php"); 
    mysqli_set_charset($con,"utf8"); 
    if(isset($_GET['tela'])){ 
        $id = $_GET['tela']; 
    }
    else{
        $id = 1; 
    }  
    if(isset($_GET['planeta'])){ 
        $planeta = $_GET['planeta']; 
    }
    else{
        $planeta = 1; 
    }  
    $aidi = $id + 1; 
    $link = "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/index.php?tela=".$id;
    $comando = 'SELECT * FROM `wpc9_transicoes` where id = '.$planeta;
    $result = mysqli_query($con, $comando);
    $res    = mysqli_fetch_assoc($result);
    /*
        echo"<pre>";
        print_r($res);
        echo"</pre>";
    */
    if("Finalizar" == $res['botao']){
        $link = "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/inicio.php";
    }
    
    

    ?>
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>planeta</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif; 
        }

        button {
            font-size: 1.2em;
            padding: 0.5em 2em;
            margin-top: 2em;
            background-color: white;
            color: #048DA9;
            letter-spacing: 0.01em;
            cursor: pointer;
            transition: all .3s ease-in-out;
            border-radius: 20px;
            border-color: #048DA9;
            border: solid;
            position: absolute;
            bottom: 20px;
            right: 20px;

        }

        button:hover {
            background-color: #048DA9;
            color: #fff;
        }

        h1 {
            display: flex;
            justify-content: right;
            align-items: center;
            color: #048DA9;
        }
        @media (max-width: 600px){
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head> 
<body>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script> 
    <style>
        .janela {
            width: 90vw;
            height: 80vh;
        }
        button.close{
            position:absolute;
            top:3px;
            right:8px;
        }
    </style>
   
           
            
            
        <div align="center" style="display:flex; text-align: Center; align-itens:center; position:absolute; bottom:5px;">
              <h1 style=" display: flex; justify-content: right; align-items: center; text-align: Center; color: #048DA9; z-index: 2;"><?php echo $res['mensagem']; ?> </h1>
        </div> 
    <model-viewer class="janela" alt="Neil Armstrong's Spacesuit from the Smithsonl Air and Space Museum"
        src="<?php echo $res['URL']; ?>" ar en vironment-image="shared-assets/environments/moon_1k.hdr"
        poster="shared-assets/models/NeilArmstrong.webp" shadow-intensity="1" camera-controls
        touch-action="pan-y"></model-viewer>

    <a href=" <?php echo  $link ?>"><button style="margin-bottom:48vh;"><?php echo $res['botao']; ?></button> </a>
    <?php
    if( $res['botao'] == "Finalizar"){
        ?> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  
        
        </script>
        <!-- Button trigger modal -->
        <button type="button" class="btn  "style=" z-index: 5; margin-right:2.4%;" data-toggle="modal" data-target="#exampleModalCenter">
            Avaliar  
        </button> 
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecione sua avaliação:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
            <style>
                .rating input[type="radio"] {
                display: none;
                }
            
                .rating {
                display: flex;
                flex-direction: row-reverse; /* Inverter a direção do fluxo */
                     justify-content: center;
                }
            
                .rating label {
                color: #ddd;
                font-size: 50px;
                padding: 0;
                cursor: pointer;
                order: 1; /* Definir a ordem para 1 */
                }
            
                .rating label:before {
                content: '\2606';
                color: black;
                }
            
                .rating input[type="radio"]:checked ~ label:before {
                content: '\2605';
                color: yellow;
                }
                .btn {
                        position: fixed;
                        height: 50px;
                        top: 50%;
                    }
            
                .modal-header {
                position: relative;
                }
                @media (max-width: 600px){
                    h1 {
                        font-size: 20px;
                    }
                     
                }
            </style>
            
            <div class="container">
                <form>
                <div class="rating" align="center">
                    <input type="radio" class="estrelas" name="estrela" id="estrela1" value="5">
                    <label for="estrela1"></label>
                    <input type="radio" class="estrelas" name="estrela" id="estrela2" value="4">
                    <label for="estrela2"></label>
                    <input type="radio" class="estrelas" name="estrela" id="estrela3" value="3">
                    <label for="estrela3"></label>
                    <input type="radio" class="estrelas" name="estrela" id="estrela4" value="2">
                    <label for="estrela4"></label>
                    <input type="radio" class="estrelas" name="estrela" id="estrela5" value="1">
                    <label for="estrela5"></label>
                </div>
                </form>
            </div>
   
    <!--<style>
        .rating input[type="radio"] {
          display: none;
        }
    
        .rating label {
          color: #ddd;
          font-size: 50px;
          padding: 0;
          cursor: pointer; 
        }
    
        .rating label:before {
          content: '\2606';
                color: black;
        }
    
        .rating input[type="radio"]:checked ~ label:before {
          content: '\2605';
                color: yellow;
        }
        .modal-header{
                position:relative;
        }
      </style>
      <div class="container"> 
        <form> 
            <div class="rating"align="center" style="">
              <input type="radio" class="estrelas" name="estrela" id="estrela5" value="1" >
                <label for="estrela5"></label>
              <input type="radio" class="estrelas" name="estrela" id="estrela4" value="2" >
                <label for="estrela4"></label>
              <input type="radio" class="estrelas" name="estrela" id="estrela3" value="3" >
                <label for="estrela3"></label>
              <input type="radio" class="estrelas" name="estrela" id="estrela2" value="4" >
                <label for="estrela2"></label>
              <input type="radio" class="estrelas" name="estrela" id="estrela1" value="5" >
                <label for="estrela1"></label>
            </div> 
          
        </form>
      </div>-->
            </div>
            <div class="modal-footer" align="center" style="position:relative;">
                <button type="button" class="btn-primary" id="enviar" onclick="mostrou()" aria-label="Close" data-dismiss="modal"  style="position:absolute; margin-right:37%; bottom:10%;">Enviar</button>
                
            </div>
            </div>
        </div>
        </div>
        
        <!-- --- >
        <td class="coluna-0-2" id="coluna-0-2">
       <span class="star-rating">
            <input type="radio" name="rating-0-2" value="1">
            <i>

            </i> 
            <input type="radio" name="rating-0-2" value="2">
            <i>

            </i> 
            <input type="radio" name="rating-0-2" value="3">
            <i>

            </i>
            <input type="radio" name="rating-0-2" value="4">
            <i>

            </i>
            <input type="radio" name="rating-0-2" value="5">
            <i>

            </i>
        </span>
    </td>

        <div class="avaliacao">
            <form>
                <label>Selecione sua avaliação:</label>
                    <div class="estrelas">
                        <input type="radio" id="estrela1" name="avaliacao" value="1"><label for="estrela1"></label>
                        <input type="radio" id="estrela2" name="avaliacao" value="2"><label for="estrela2"></label>
                        <input type="radio" id="estrela3" name="avaliacao" value="3"><label for="estrela3"></label>
                        <input type="radio" id="estrela4" name="avaliacao" value="4"><label for="estrela4"></label>
                        <input type="radio" id="estrela5" name="avaliacao" value="5"><label for="estrela5"></label>
                    </div>
                    <button type="submit">Enviar avaliação</button>
                </form>
    </div>
<style>
    .estrelas {
    display: inline-block;
    }

    .estrelas input[type="radio"] {
    display: none;
    }

    .estrelas label {
    font-size: 25px;
    color: #ccc;
    cursor: pointer;
    }

    .estrelas label:before {
    content: '\f005';
    font-family: FontAwesome;
    font-size: 25px;
    display: inline-block;
    margin-right: 5px;
    }

    .estrelas input[type="radio"]:checked ~ label {
    color: #ffd700;
    }
      .star-rating {
        margin-left: 10px;
        margin-right: 10px;
        font-size: 0;
        white-space: nowrap;
        display: inline-block;
        width: 250px;/*500px*/
        height: 50px;
        overflow: hidden;
        position: relative;
        background:     url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
        background-size: contain;
  }
    .apagada {
            background-image: url('assets\estrela-prata.png');/*http://www.biblecast.net.br/resources/estrela-prata.png*/
            width: 32px;
            height: 32px;
            cursor: pointer;
          }

          .destaque {
            background-image: url('assets\estrela.png');    /*http://www.biblecast.net.br/resources/estrela.png*/
            width: 32px;
            height: 32px;
            cursor: pointer;
          }
</style>        --->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
              function mostrou(){
        
                let nota = document.getElementsByName("estrela");
                 for (var i = 0; i < nota.length; i++) { 
                    if (nota[i].checked) { 
                        var notafinal = nota[i].value; 
                         Swal.fire(
                            'Sua nota '+ notafinal +' foi cadastrada!',
                            'Obrigado pela sua avalição!',
                            'success'
                            )
                    }
            }
               
        }
        /*
        const form = document.querySelector('form');
        const estrelas = document.querySelectorAll('.estrelas input[type="radio"]');
        const botao = document.querySelector('button[type="button"]');

        botao.addEventListener('click', function(event) {
        event.preventDefault();
        
        let avaliacao = 0;
        for (let i = 0; i < estrelas.length; i++) {
            if (estrelas[i].checked) {
                avaliacao = estrelas[i].value;
                console.log(avaliacao);
                break;
            }
        }
        
        if (avaliacao > 0) {
            alert(`Sua avaliação foi: ${avaliacao} estrelas.`);
            console.log(avaliacao);
        } else {
           
            alert('Por favor, selecione uma avaliação. ' );
        
        }
        });
       */
        </script>


        <?php
    }
    
     ?>
</body>

</html>