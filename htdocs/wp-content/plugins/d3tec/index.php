<?php
    include_once("conexao.php"); 
    mysqli_set_charset($con,"utf8"); 
    if(isset($_GET['tela'])){ 
        $id = $_GET['tela']; 
    }
    else{
        $id = 1; 
    }

    $comando = 'SELECT * FROM wpc9_perguntas where id = '.$id;
    $result = mysqli_query($con, $comando);
    $res    = mysqli_fetch_assoc($result);


    /**
    [id] => ID da pergunta
    [pergunta] => pergunta
    [quantbtn] => a quantidade de butoes que teremos
    [texto1]   => Texto do butao 1
      ...
    [texto5]   => Texto do butao 5
    [imagem1]  => Imagem do butao 1
       ...
    [imagem5]  => Imagem do butao 1
    Exemplo eu quero ter acesso a pergunta eu faço:

    echo $res['pergunta']; 

    Nesse exemplo acima eu estaria mostrando a pergunta
    
    */
   // E os dados ficam ai embaixo com toda logica. 

    $aidi = $id + 1;

    $link = "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/index.php?tela=".$aidi;

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
           /* display: grid;
            place-content: center;*/
            min-height: 100vh;
            overflow: hidden;
        }
    
        h1{
            font-family: 'Roboto', sans-serif;
            padding: 1.5rem ;
            margin: 1rem 0;
            color: #048DA9;
            text-align: center;
        }

        #box_button {
            align-items: center;
            display: flex;
            margin-top: '<?php if($id == 4) echo "0vh"; else echo "15vh";  ?>' ;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 0.8rem;
            margin-bottom: 0.5rem;
            width: auto;
            margin-bottom: 1.5rem;

        }

        #box_opc{
            gap: 0.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            //flex-direction: column;
        }

        .descricao{
            text-align: center;
            display: grid;
            justify-content: center;
            align-items: center;
            /max-height: 180px;
        }

        button {
            font-size: 1.2em;
            background: white;
            padding: 1rem;
            width: 11rem;
            min-height: 100px;
            word-wrap: break-word;
            border-radius: 1rem; 
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center;
            
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

            color: rgba(4, 141, 169, 1);
            border-radius: 20px;
            border-color: #048DA9;
            border: solid;

       }

       @media (max-width: 400px){
              button {
                min-height: 80px;
              }
              p{
                  margin:0;
              }

       }

       p{
           font-family: 'Roboto', sans-serif;
           font-size: 1.2em;
           word-wrap: break-word;
           color: rgba(4, 141, 169, 1);
           width: 150px;
           height: 80px;
           margin: 1rem;

       }

        button:hover{
            cursor: pointer;
        }

        .active{
            background-image: url(https://www.svgrepo.com/show/384403/accept-check-good-mark-ok-tick.svg);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center;
            color: transparent;
        
            border-radius: 20px;
            border-color: #048DA9

        }
        .errou{
            background-image: url(https://cdn-icons-png.flaticon.com/512/148/148766.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center;
            color: transparent;

            border-radius: 20px;
            border-color: #048DA9;
            
        }
        @keyframes progressAnimation {
            0% {
            width: 0;
            }
            100% {
            width: 100%;
            }
        } 
        #progress-bar {
            /* Define a cor de fundo da barra de progresso */
            background-color: #f0f0f0;
            /* Define a cor da barra de progresso preenchida */
            color: #007bff;
            /* Define a altura da barra de progresso */
            height: 40px;
            /* Define a borda da barra de progresso */
            /* border: none;
            /* Define a borda arredondada da barra de progresso */
            border-radius: 10px;
          }
          
          #progress-bar::-webkit-progress-value {
            /* Define a cor da barra de progresso preenchida no Chrome, Safari e Opera */
            background-image: linear-gradient(to right, #048BA8, #00e1ff) ;
            border-radius: 10px;
            animation: progressAnimation 2s ease-in-out infinite;
            border: solid 3px #048BA8;
          } 
          
          #progress-bar::-moz-progress-bar {
            /* Define a cor da barra de progresso preenchida no Firefox */
            background-image: linear-gradient(to right, #048BA8, #00e1ff) ;
            border-radius: 10px;
            animation: progressAnimation 2s ease-in-out infinite;
            border: solid 3px #048BA8;
          } 
          #progress-bar::-webkit-progress-bar {
            background-color: lightgray;
            border-radius: 10px;
          }

        .box{
            display: flex;
            gap: 2rem;
            height: 100%;
            width: 100%;

            justify-content: center;  

        }
        .perguntas{
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }
        .resposta{
            display: flex;
            flex-direction: column;
        }
        .select{
            background-color: #D5E5F2;
        }
        .acertou{
            background-color: rgb(0, 255, 17);
        }

        @media (max-width: 800px) {
            body {
                margin:  1rem auto;
                overflow: visible;
            }
            .descricao {
                height: auto;
            }
            #box_button{
                 margin-top:0vh;
                margin-bottom: 0rem;
                justify-content: center;
            }/*
             #box_button {
                align-items: center;
                display: flex;
        
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 0.8rem;
                margin-bottom: 0.5rem;
                width: auto;
                margin-bottom: 1.5rem;

            }*/
        } 

    </style>
</head>

<body>

    <h1><?php echo $res["pergunta"] ?></h1>
    <div class="container">
        <div id="box_button" align='center'></div>
        <div id="box_opc"></div>
    </div>

    <progress style="width: 100%;" id="progress-bar" value="0" max="100"></progress>

    <script> 
        const quant = <?php echo $res["quantbtn"]; ?>;
        const quantOpc = <?php echo $res["quantOpc"]; ?>;
        const verdade = <?php echo $res["Resposta1"]; ?> + <?php echo $res["Resposta2"]; ?> + <?php echo $res["Resposta3"]; ?> + <?php echo $res["Resposta4"]; ?> + <?php echo $res["Resposta5"]; ?>;

        let vet = ["<?php echo $res["texto1"]; ?>","<?php echo $res["texto2"]; ?>", "<?php echo $res["texto3"]; ?>","<?php echo $res["texto4"]; ?>","<?php echo $res["texto5"];?>"];
        let vetVer = ["<?php echo $res["Resposta1"]; ?>","<?php echo $res["Resposta2"]; ?>", "<?php echo $res["Resposta3"]; ?>","<?php echo $res["Resposta4"]; ?>","<?php echo $res["Resposta5"];?>"];

        let figura = ["<?php echo $res["imagem1"]; ?>","<?php echo $res["imagem2"]; ?>", "<?php echo $res["imagem3"]; ?>","<?php echo $res["imagem4"]; ?>","<?php echo $res["imagem5"];?>"];
       
       let figuraresp = ["<?php echo $res["Opc1Imagem"]; ?>","<?php echo $res["Opc2Imagem"]; ?>", "<?php echo $res["Opc3Imagem"]; ?>"];
       
        let opc = ""
        let ligar = ""

        let vetOpc = ["<?php echo $res["opc1"]; ?>","<?php echo $res["opc2"]; ?>","<?php echo $res["opc3"]; ?>"]
        let vetRespOpc = ["<?php echo $res["respOpc1"]; ?>", "<?php echo $res["respOpc2"]; ?>","<?php echo $res["respOpc3"]; ?>"]

        for(let i = 0; i < quant;i++){
            const box = document.getElementById("box_button")

            const botao = document.createElement("button")
            const divs = document.createElement("div")
            const paragrafo = document.createElement("p")

            if(<?php echo $id ?> == 4 || <?php echo $id ?> == 6 ){
                botao.classList.add("perg")
            }

            if(figura[i]){
                botao.style = `background-image: url("${figura[i]}");`
            }
                                                                                                                                                                    
            paragrafo.innerText = vet[i]
            let tamanho = vet[i].length;
            divs.classList.add("descricao")
            if(tamanho > 16){
                paragrafo.classList.add("maiorQ20")
            }
            

            botao.id = `myButton${i}`
            botao.value = vetVer[i]
            botao.addEventListener("click",()=> toggleCheckbox(botao.id) )

            divs.append(botao,paragrafo)

            //box.append(botao,divs,paragrafo)
            box.append(divs)

        }

        if(<?php echo $id ?> == 4 || <?php echo $id ?> == 6 ){
            for(let i = 0; i < quantOpc ; i++){
                const box = document.getElementById("box_opc")
                
                const botao = document.createElement("button")
                const divs = document.createElement("div")
                const paragrafo = document.createElement("p")
                 
                if(figuraresp[i]){
                    botao.style = `background-image: url("${figuraresp[i]}");`
                }
                divs.style = `text-align: center;`
                paragrafo.innerText = vetOpc[i]
                
                /*paragrafo.classList.add("descricao")*/
                botao.id = `perg${i}`
                botao.value = vetRespOpc[i]
                botao.classList.add("ligar")
                botao.addEventListener("click",()=> toggleCheckbox(botao.id) )

                divs.append(botao,paragrafo)

                box.appendChild(divs)

            }

        }

        function jogou(progressBar,percent){

            if(opc.value != "" && ligar.value != ""){

                if(opc.value === ligar.value ){
                    audioAcertou();
                    opc.classList.remove("select")
                    opc.classList.remove("perg")
                    opc.removeAttribute("id")
                    opc.removeAttribute("onclick")
                    opc.style = ``
                    opc.classList.add("active")
                    ligar.setAttribute('aria-checked', 'false');
                    ligar.classList.remove("select")
                    progressBar.value= progressBar.value + percent
        
                    opc = ""
                    ligar = ""
                }else{
                    opc.classList.remove("select")
                    opc.setAttribute('aria-checked', 'false');
                    ligar.classList.remove("select")
                    ligar.setAttribute('aria-checked', 'false');
                    audioErrou()
                    opc = ""
                    ligar = ""
                    

                }
            }
        }

        function desmarcarTudo(cond){
            const buttons = document.querySelectorAll(`.${cond}`);
            buttons.forEach(button => {
                setTimeout(()=>{
                    button.classList.remove("select")
                    button.setAttribute('aria-checked', 'false');

                }, 500)
            });
        }

        function quantCheck(cond){
            const buttons = document.querySelectorAll(cond);
            let count = 0;
            buttons.forEach(button => {
                if (button.getAttribute('aria-checked') === 'true') {
                    count++;
                }
            }); 
            return count;
        }

        function audioErrou(){
            const audio = new Audio('http://solucionecovid.epizy.com/wp-content/uploads/2023/04/error.mp3'); // Crie o objeto Audio com o caminho do arquivo de áudio
            audio.volume = 0.5
            audio.play(); 
        }
        function audioAcertou(){
            const audio = new Audio('http://solucionecovid.epizy.com/wp-content/uploads/2023/04/SOM-DE-RESPOSTA-CORRETACERTA-RESPOSTA-CORRECT-SOUND-mp3cut.net_.mp3'); // Crie o objeto Audio com o caminho do arquivo de áudio
            audio.volume = 0.5
            audio.play(); 
        }



        function toggleCheckbox(id) {
            
            const progressBar = document.getElementById("progress-bar");
            let percent

            //dependendo da pagina calcula abarra de progresso de forma difetente
            if(<?php echo $id ?> == 4 || <?php echo $id ?> == 6 ){
                percent = progressBar.max / quant
            }else{
                percent = progressBar.max / verdade
            }

            var button = document.getElementById(id);

            // Verifica o estado atual do botão
            var checked = button.getAttribute('aria-checked') === 'true';
            
            // Alterna o estado do botão
            if (checked) {
                if(<?php echo $id ?> == 4 || <?php echo $id ?> == 6 ){
                    opc=""
                    ligar=""
                    button.setAttribute('aria-checked', 'false');
                    //button.classList.remove("select")

                    //button.classList.remove('active');
                    //button.classList.remove('errou');

                    //progressBar.value= progressBar.value - percent
                }else{
                    button.setAttribute('aria-checked', 'false');
                    //Altera a classe bo botão
                    //button.classList.remove('active');
                    //button.classList.remove('errou');
                    //progressBar.value= progressBar.value - percent
                }
            } else {
                if(<?php echo $id ?> == 4 || <?php echo $id ?> == 6 ){

                    button.setAttribute('aria-checked', 'true');
                   
                    if(quantCheck('.perg') == 2 || quantCheck('.ligar') == 2){
                        opc=""
                        ligar=""
                        button.classList.add("select")
                        desmarcarTudo("ligar")
                        desmarcarTudo("perg")
                    }else{
                        if(opc === "" && button.classList.contains("perg")){
                            opc = button
                            
                            button.classList.add("select")
                        }else if(ligar === "" && button.classList.contains("ligar")){
                            ligar = button
                            button.classList.add("select")
                        }
                        if(opc != "" && ligar != ""){
                            jogou(progressBar,percent)
                        }
                    }

                }else{
                    if(button.value == 1){
                        //Altera a classe bo botão
                        button.style = ``
                        button.classList.add('active');
                        button.setAttribute('aria-checked', 'true');   
                        button.value = 2;
                        audioAcertou();
                
                        progressBar.value= progressBar.value + percent
                    }else if(button.value == 0){
                        button.style = ``
                        button.classList.add('errou');
                        button.setAttribute('aria-checked', 'true');
                        audioErrou();   
                    }
                }  
            }
        
            if(progressBar.value == 100){
               
                if(<?php echo $id ?> == 2){
 
                    window.location.href = '<?php echo "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/planeta.php?planeta=2&tela=".$aidi; ?>'
                }
                if(<?php echo $id ?> == 4){
             
                    window.location.href = '<?php echo "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/planeta.php?planeta=3&tela=".$aidi; ; ?>' 
                }
                if(<?php echo $id ?> == 6){
 
                    window.location.href = '<?php echo "http://solucionecovid.epizy.com/wp-content/plugins/d3tec/planeta.php?planeta=4&tela=".$aidi; ; ?>' 
                }
                else if(2 != <?php echo $id ?> && <?php echo $id ?> != 4 && <?php echo $id ?> != 6){
        
                    window.location.href = '<?php echo $link; ?>';
                    }
            }
            
            
        }




    </script>
 
</body>

