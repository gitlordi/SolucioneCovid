<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function cadastro() {
	?>
		<style>
        body {
            font-family: 'Roboto', sans-serif;

        }

        input {
            width: 100%;
            border-radius: 20px;
            padding: 0.5rem;
            margin: 0.2rem;
        }


        .seila {
            display: block;
            margin-bottom: 1.5%;

        }

        #etapa-dois {
            display: none;
        }

        #etapa-tres {
            display: none;
        }
    </style>
		  <form id="formulario" action="/wp-content/plugins/elementor-1/includes/cadastro.php" method="post" >



        <div id="etapa-um" style="display: block;">
            <div style="width: 100%; justify-content: center; align-items: center; display: flex;">
                <div>

                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; margin-bottom: 5%; color:#048BA8;font-size: 2.5rem; font-weight: 400;">
                        Cadastro</p>
                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; color: #01C3BC; font-weight: 200; font-size: 1.5rem;">
                        Informações pessoais</p>
                </div>
            </div>

            <div class="etapa_one">
                <label>Nome</label>
                <input type="text" placeholder="Ex: Bernardo Silva" class="nome" id="name" name="nome">
                <label>CPF</label>
                <input type="text" placeholder="Ex: 123.456.789-00" class="cpf" id="cpff" name="cpf">
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <label style="display: block;">Nascimento</label>
                        <input type="date" class="nascimento" id="nascido" style="width: 100%;" name="datadenascimento">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="align-items: center; width: 50%;">
                        <label>Sexo</label>
                        <select class="sexo" style="width: 100%;" name="sexo">
                            <option>Feminino</option>
                            <option>Masculino</option>
                            <option>Prefiro não responder</option>
                            <option>Outros</option>
                        </select>
                    </div>
                </div>
                <label>Telefone</label>
                <input type="tel" class="telefone" placeholder="Ex: (12) 3456-7890" id="celular"
                    name="numerodetelefone">
                <br>
                <div style="text-align: center;">
                    <input style="border-radius: 50px; border-color: #048BA8;" type="button" name="enviar" class="envi_ar" value="Proximo" id="enviar_um" onclick="next1()">
                </div>
            </div>
        </div>
        <div id="etapa-dois">
            <div style="width: 100%; justify-content: center; align-items: center; display: flex;">
                <div>
                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; margin-bottom: 5%; color:#048BA8;font-size: 2.5rem; font-weight: 400;">
                        Cadastro</p>
                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; color: #01C3BC; font-weight: 200; font-size: 1.5rem;">
                        Endereço</p>
                </div>  
            </div>
            <div class="etapa_two">
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <label style="display: block;">Estado</label>
                        <input type="text" name="estado" class="esta_do" placeholder="Ex: RN">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="width: 50%;">
                        <label>Cidade</label>
                        <input type="text" name="cidade" class="cida_de" placeholder="Ex: Mossoro">
                    </div>
                </div>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <label>Bairro</label>
                        <input type="text" name="bairro" class="bair_ro" placeholder="Ex: Nova Betania">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="width: 50%;">
                        <label>Rua</label>
                        <input type="text" name="rua" class="r_ua" placeholder="Ex: R. Martins">
                    </div>
                </div>
                <label>CEP</label>
                <input type="text" name="cep" class="c_ep" placeholder="Ex: 123.456-789">
                <label>Complemento</label>
                <input type="text" name="complemento_endereco" class="complemen_to"
                    placeholder="Ex: Proximo a prefeitura">
                <br>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <input type="button" nome="anterior" class="anteri_or" value="Anterior" onclick="anterior2()">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="width: 50%;">
                        <input type="button" name="enviar" class="envi_ar" value="Proximo" id="proximo_dois" onclick="next2()">
                    </div>
                </div>
            </div>
        </div>
        <div id="etapa-tres">
            <div style="width: 100%; justify-content: center; align-items: center; display: flex;">
                <div>

                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; margin-bottom: 5%; color:#048BA8;font-size: 2.5rem; font-weight: 400;">
                        Cadastro</p>
                    <p
                        style="margin: 0%; justify-content: center; align-items: center; display: flex; color: #01C3BC; font-weight: 200; font-size: 1.5rem;">
                        Email e senha</p>
                </div>
            </div>
            <div class="etapa_three">
                <label>E-mail</label>
                <input type="email" name="email" class="enderecodeemail" placeholder="Ex: bernardo@outlook.com">
                <label>Confirmar e-mail</label>
                <input type="email" name="confirmaremail" class="confirmar_email" placeholder="Ex:bernardo@outlook.com">
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <label>Senha</label>
                        <input type="password" name="senha" class="password" placeholder="*******">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="width: 50%;">
                        <label>Confirmar senha</label>
                        <input type="password" name="confirmarsenha" class="confirmar_senha" placeholder="*******">
                    </div>
                </div>
                <br>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50%;">
                        <input type="button" nome="anterior" class="anteri_or" value="anterior" id="anterior_dois" onclick="anterior3()">
                    </div>
                    <div style="width: 5%;"></div>
                    <div style="width: 50%;">
                        <input type="submit" name="enviar" class="confirm_ar" value="Confirmar">
                    </div>
                </div>
            </div>
        </div>


    </form>


    <script>
        const tela_um = document.getElementById("etapa-um")
        const tela_dois = document.getElementById("etapa-dois")
        const tela_tres = document.getElementById("etapa-tres")

        function next1() {
            tela_um.style.display = "none"
            tela_dois.style.display = "block"
            tela_tres.style.display = "none"
        }

        function next2() {
            tela_um.style.display = "none"
            tela_dois.style.display = "none"
            tela_tres.style.display = "block"
        }

        function anterior2() {
            tela_dois.style.display = "none"
            tela_um.style.display = "block"
            tela_tres.style.display = "none"
        }

        function anterior3() {
            tela_tres.style.display = "none"
            tela_dois.style.display = "block"
            tela_um.style.display = "none"
        }
    </script>		
		









		<?php
					
}
add_shortcode(Cadastro, 'cadastro');			
function Lucas() {
	?>
		 
		<div>
        <form action="http://solucionecovid.epizy.com/wp-content/plugins/cadastro.php" method="post">

			
			
            <label for="">Nome</label>
            <input name="nome" type="text">
            
            <label for="">Rua</label>
            <input name="rua" id="" placeholder="Mossoró">
            
            <label for="">Bairro</label>
            <input name="bairro"  type="text" placeholder="RN">
            
            <label for="">Estado</label>
            <input name="estado"  type="text" placeholder="RN">
            
            <label for="">CEP</label>
            <input name="CEP" type="number">
            
            <label for="">Complemento</label>
            <input name="complemento" type="text">

            <input type="submit">
        </form>
    </div>

	<?php
}

function jogo() { 
	?>
	<style>
		.janela{
			min-height:85vh;
			width:100vw;	
		}
	</style>
		<script>
	  var audio = document.getElementById("somdojogo");
	  // audio.volume = 0.5;
	  // audio.setVolume(0.0);
	</script>
	<audio id="somdojogo" src="http://solucionecovid.epizy.com/wp-content/uploads/2023/05/A_Heros_Oath-2.mp3" loop autoplay></audio>
	<iframe class="janela" src="http://solucionecovid.epizy.com/wp-content/plugins/d3tec/inicio.php" frameborder="0" >
	</iframe>			

<?php
}
function formulario(){
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
    <title>Relatar sintomas</title>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .h1 {
        color: #048BA8;
        font-size: medium;
    }

    .checkbox {
        display: flex;
    }

    .h2 {
        color: #048BA8;
        font-size: large;
        width: 100%;
        text-align: center;
    }

    .textodocentro {
        /* 
        * margin-left: 20%;
        * margin-top: 5%;
        * 
        * */
        align-items: center;
        margin: 0%;
		flex-direction: column;
        display: flex;
        justify-content: center;
		

    }

    .box_ubs {
        width: 40rem;
        height: 4rem;
        border: solid;
        margin: left;
        border-color: #048BA8;
        border-radius: 20px;
        align-items: center;
        text-align: center;
        display: none;
        color: #048BA8;
    }

    #etapa_dois_form {
        display: none;
    }

    #etapa_tres_form {
        display: none;

    }

    #etapa_quatro_form {
        display: none;

    }

    .proxi_mo {
        width: 20%;
        text-align: center;

    }

    .proximo_dois {
        width: 20%;
        border-color: #048BA8;
        background-color: white;
        border-radius: 20px;
        display: center;

    }

    .proximo_tres {
        width: 20%;
        border-color: #048BA8;
        background-color: white;
        border-radius: 20px;
        display: center;
    }

    .conclui_do {
        width: 20%;
        border-color: #048BA8;
        background-color: white;
        border-radius: 20px;
        display: center;
    }

    input[type="checkbox"], input[type="radio"] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 20px;
        height: 18px;
        border: 1px solid #048BA8;
        border-radius: 50%;
        outline: none;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        margin-bottom: -3px;
    }

    input[type="checkbox"]:checked::before , input[type="radio"]:checked::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        font-size: 1em;
        color: #048BA8;
        text-align: center;
        background-color: #048BA8;
        border-radius: 50%;
    }

    label {
        color: #048BA8;
    }

    #etapa_um_form,
    #etapa_tres_form {
        align-items: center;
        margin: 0%;

        justify-content: center;
    }

    .box-btn {
        text-align: center;

    }

    .check_box {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box_febre {
        border: 2px solid #048BA8;
        padding: 15px;
        background-color: #ffffff;
        margin: 1px;
        border-radius: 20px;
        float: left;
        height: 8.5em;
        margin-top: 3%;

    }

    .box_febre2 {
        border: 2px solid #048BA8;
        padding: 15px;
        background-color: #ffffff;
        margin: 10px;
        border-radius: 20px;
        display: inline-block;
        height: 8.5em;
		margin-bottom: 10px;

    }

    .conteiner {
        display: flex;
        display: none;
    }

    .titulo_caixa {
        color: #048BA8;
		margin: 0;
    }
	
	.inputs {

            display: flex;
            align-items: center;
			margin-left: 15px;
			margin-bottom: 5px;
        }

	.som-tosse {
            width: 20px;
            height: 20px;
			margin-left: 15px;
            
	}
	
	.divisao{
		display: flex;
		flex-direction: column;
	}
	
	@media(max-width: 500px){
		.proxi_mo{
			width: 40%;
		}
		
		.proximo_dois{
			width: 40%;
		}
		
		.proximo_tres{
			width: 40%;
		}
		
		.conclui_do{
			width: 40%;
		}
	}
	
	@media(max-width: 630px){
		.conclui_do{
			width: 40%;
		}
		
	}
	

	

    

</style>

<body> 
        <div style="width: 100%; justify-content: center; align-items: center; display: flex;">
            <div>

                <p
                    style="margin: 0%; justify-content: center; align-items: center; display: flex; margin-bottom: 5%; color:#048BA8;font-size: 2.5rem; font-weight: 400;">
                    Relatar sintomas</p>
                <p
                    style="margin: 0%; justify-content: center; align-items: center; display: flex; color: #01C3BC; font-weight: 200; font-size: 1.5rem;">
                    O que está sentindo?</p>
            </div>
        </div>
        <div class="textodocentro">
            <h1 class="h1"></h1>
            <div id="etapa_um_form">
                <h2 class="h2" style="color: #048BA8;">Apresenta algum desses sintomas? Se sim, marque a(s) opção(ões)
                    correspondente(s):</h2>
                <div class="check_box">
                    <div class="divisao">
						<div>
                        	<input type="checkbox" name="febre" id="feb_re" onclick="aparecer_conteiner()">
                        	<label for="feb_re">Febre</label>
						</div>	
                        <div class="conteiner" id="conteiner_">
                            <div class="box_febre">
                                <input type="radio" name="febregrau" id="primeira_opcao" value="1">
                                <label for="primeira_opcao">Entre 36° e 37°</label>
                                <br>
                                <input type="radio" name="febregrau" id="segunda_opcao" value="1">
                                <label for="segunda_opcao">Entre 37° e 38°</label>
                                <br>
                                <input type="radio" name="febregrau" id="terceira_opcao" value="2">
                                <label for="terceira_opcao">Acima de 40°</label>
                                <br>
                                <input type="radio" name="febregrau" id="quarta_opcao" value="0">
                                <label for="quarta_opcao">Não sei dizer</label>
                            </div>
                            <div class="box_febre2">
                                <label class="titulo_caixa" style = "color: #048BA8; font-size: large">Há quanto tempo?</label>
								                <br>
                                <input type="radio" name="febretempo" id="opcao1" value="1">
                                <label for="opcao1" class = "testerapo">Mais de 24h</label>
                                <br>
                                <input type="radio" name="febretempo" id="opcao2" value="1">
                                <label for="opcao2">Mais de 48h</label>
                                <br>
                                <input type="radio" name="febretempo" id="opcao3" value="2">
                                <label for="opcao3">Mais de 72h</label>
                            </div>
                        </div>
						<div>
                        	<input type="checkbox" name="tosse" id="tos_se" onclick="aparecer_tosse()">
							<!-- aparecerubs('tos_se', 'ubs_ubs_box') -->
                        	<label for="tos_se">Tosse</label>
						</div>
                        <div id="tosseCaixa" class="box_tosse conteiner">

                            <div style="display: flex; align-items: center;">

                                <div class="inputs">
                                    	<input class="etpUm" type="radio" name="tossecheia" onclick="mostrarTosse()" id="radio_tosse_seca">
                                    	<audio id="Audiotosse_seca" src="http://solucionecovid.epizy.com/wp-content/uploads/2023/05/TosseSeca.mp3"></audio>
                                    	<label for="radio_tosse_seca">Tosse Seca</label>
                                    <div>
                                        <img class="som-tosse" src="https://cdn.discordapp.com/attachments/1030153285199474799/1107842174835499049/Vector.png" onclick="mostrarTosseSeca()" alt="Ícone">
                                    </div>
                                </div>
                                <div class="inputs">
                                    <input class="etpUm" type="radio" name="tossecheia" onclick="mostrarTosse()" id="radio_tosse_cheia">
                                    <audio id="Audiotosse_cheia" src="http://solucionecovid.epizy.com/wp-content/uploads/2023/05/TosseCheia.mp3"></audio>
                                    <label for="radio_tosse_cheia">Tosse Cheia </label>
                                    <div>
                                     <img class="som-tosse" src="https://cdn.discordapp.com/attachments/1030153285199474799/1107842174835499049/Vector.png" onclick="mostrarTosseCheia()" alt="Ícone">
                                    </div>
                                </div>
                            </div>
                        </div>
						<div>
                        	<input class="etpUm" type="checkbox" name="coriza" id="cori_za">
                        	<label for="cori_za">Coriza</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="dornagarganta" id="dor_na_garganta">
                        	<label for="dor_na_garganta">Dor na garganta</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="faltadear" id="falta_de_ar">
                        	<label for="falta_de_ar">Falta de ar</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="dordecabeca" id="dor_de_cabeca">
                        	<label for="dor_de_cabeca">Dor de cabeça</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="dornocorpo" id="dor_no_corpo">
                        	<label for="dor_no_corpo">Dor no corpo</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="malestar" id="mal_estar">
                        	<label for="mal_estar">Mal-estar</label>
						</div>
						<div>
                        	<input class="etpUm" type="checkbox" name="diarreia" id="diarre_ia">
                        	<label for="diarre_ia">Diarreia</label>
						</div>	
                        <div>
                        	<input class="nenhum" type="checkbox" name="Nenhuma" id="nenhu_ma1">
                        	<label for="nenhu_ma1">Nenhuma das opções acima</label>
						</div>
                    </div>
                </div>
				<br>
                <div class="box-btn">
                    <input type="button" name="proximo" class="proxi_mo" value="Próximo" onclick="proxima_etapa()"
                        style="border-radius: 20px; background-color: #048BA8">
                </div>
            </div>
            <div id="etapa_dois_form">
                <h2 class="h2" style="color: #048BA8">Apresenta algum desses sinais de alerta? Se sim, marque a(s)
                    opção(ões) correspondente(s):
                </h2>
                <div class="check_box">
                    <div class="divisao">
						<div>
                        	<input class="etpDois" type="checkbox" name="dificuldadepararespirar" id="dificudlade_para_respirar">
                        	<label for="dificudlade_para_respirar">Dificuldade para respirar (FR>23) </label>
						</div>
						<div>
                        	<input class="etpDois" type="checkbox" name="respiracaomuitorapida" id="respiracao_muito_rapida">
                        	<label for="respiracao_muito_rapida">Respiração muito rápida</label>
                        </div>
						<div>
                        	<input class="etpDois" type="checkbox" name="sonolentoounaorespondeaochamado" id="sonolento_ou_nao_responde">
                        	<label for="sonolento_ou_nao_responde">Sonolento ou não responde ao chamado (alteração do nível de consciência)</label>
                        </div>
						<div>
                        	<input class="etpDois" type="checkbox" name="corazulada" id="cor_azulada">
                        	<label for="cor_azulada">Cor azulada ou arroxeada na ponta dos dedos</label>
                        </div>
						<div>
                        	<input class="etpDois" type="checkbox" name="pontadonariz" id="ponta_do_nariz">
                        	<label for="ponta_do_nariz">Cor azulada ou arroxeada na ponta do nariz ou lábios</label>
						</div>	
                        <div>
                        	<input class="nenhum" type="checkbox" name="Nenhuma2" id="nenhu_ma2">
                        	<label for="nenhu_ma2">Nenhuma das opções acima</label>
						</div>
                    </div>
                </div>
                <br>
                <br>
                <div class="box_ubs" id="hospital_box">
                    <h3 class="ubs_do_vrau_vrau">Por favor, dirija-se IMEDIATAMENTE ao Hospital mais próximo</h3>
                </div>
				<br>
                <div class="box-btn">
                    <input type="button" name="proximodois" class="proximo_dois" value="Próximo"
                        onclick="proxima_etapa2()" style="border-radius: 20px; background-color: #048BA8">
                </div>
            </div>
            <div id="etapa_tres_form" align="center">
                <h2 class="h2" style="color: #048BA8">Como estão as suas vacinas? Marque a opção correspondente:</h2>
                <input type="radio" name="emdia" value="nao" id="em_dia">
                <label for="em_dia">Minhas vacinas de Covid-19 estão em dia!</label>
                <br>
                <input type="radio" name="emdia" value="sim" id="sem_dia">
                <label for="sem_dia">Não Lembro/Não tomei nenhuma dose/ Estão atrasadas</label>
                <br>
                <br>
                <div class="box_ubs" id="ubs_box">
                    <h3 class="ubs_do_vrau_vrau">Quando possível, dirija-se a UBS mais próxima</h3>
                </div>
                <div class="box-btn">
                    <input type="button" name="proximotres" class="proximo_tres" value="Próximo"
                        onclick="proxima_etapa3()" style="border-radius: 20px; background-color: #048BA8">
                </div>
            </div>

            <div id="etapa_quatro_form">
                <h2 class="h2" style="color: #048BA8">Teve Covid-19 anteriormente e apresenta algum desses sintomas? Se
                    sim, marque a(s) opção(ões)
                    correspondente(s):</h2>
                <div class="check_box">
                    <div class="divisao">
						<div>
                        	<input class="etpTres" type="checkbox" name="queda" id="queda">
                        	<label for="queda">Queda de cabelo</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="Palpitacao" id="Palpitacao">
                        	<label for="Palpitacao">Palpitação</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="musculares" id="musculares">
                        	<label for="musculares">Dores musculares</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="paladar" id="paladar">
                        	<label for="paladar">Perda do olfato e/ou paladar</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="Cansaco" id="Cansaco">
                        	<label for="Cansaco">Cansaço</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="persistente" id="persistente">
                        	<label for="persistente">Tosse persistente</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="concentrar" id="concentrar">
                        	<label for="concentrar">Dificuldade para se concentrar</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="memoria" id="memoria">
                        	<label for="memoria">Alterações de memória</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="sono" id="sono">
                        	<label for="sono">Alteração do sono</label>
                        </div>
						<div>
                        	<input class="etpTres" type="checkbox" name="Dores" id="Dores">
                        	<label for="Dores">Dores articulares</label>
						</div>
                         <div>
                        	<input class="nenhum" type="checkbox" name="Nenhuma3" id="nenhu_ma3">
                        	<label for="nenhu_ma3">Nenhuma das opções acima</label>
						</div>
                    </div>
                </div>
				<br>
                <div class="box-btn">
                    <!--
                    <a href="http://solucionecovid.epizy.com/resultado/">
                        <input type="button" name="concluido" class="conclui_do" value="Concluído"
                            style="border-radius: 20px; background-color: #048BA8">
                    </a>
                    -->
                    <button onclick="encaminhar()" class="conclui_do" style="border-radius: 20px; background-color: #048BA8">
                            Concluido
                    </button>
                </div>
            </div>

        </div>
    
    <script>
        function encaminhar(){ 
           let link = 'http://solucionecovid.epizy.com/resultado/';
           var vacinas = document.getElementsByName('emdia'); 
           var nenhuma = document.querySelectorAll('.nenhum'); 
           var febregrau = document.getElementsByName('febregrau'); 
           var febretempo = document.getElementsByName('febretempo'); 
           let marcouNada = true;
            const etap = document.querySelectorAll(".etpUm");
            let count = 0
            etap.forEach(etap => {
                if(etap.checked == true){
                    marcouNada =false
                    count++
                    if(count >= 1){
                        link = 'http://solucionecovid.epizy.com/resultado/'
                    }
                }
                
            }); 
            const etap3 = document.querySelectorAll(".etpTres");
            etap3.forEach(etap3 => {
                if(etap3.checked == true){
                    marcouNada =false
                    count++
                    if(count >= 1){
                        link = 'http://solucionecovid.epizy.com/resultado-3/'
                    }
                }
                
            }); 
            const etap2 = document.querySelectorAll(".etpDois");
            etap2.forEach(etap2 => {
                if(etap2.checked == true){
                    marcouNada =false
                    count++
                    if(count >= 1){
                        link = 'http://solucionecovid.epizy.com/resultado-2/'
                    }
                }
                
            }); 
            for (var i = 0; i < febregrau.length; i++) { 
                // Pegando se o cara tá com o cartão atualizado ou nao
                if (febregrau[i].checked) { 
                    var graufebre = febregrau[i].value; 
                    marcouNada =false
                    if(graufebre == 3){
                        link = 'http://solucionecovid.epizy.com/resultado-3/'
                    }else if(graufebre == 2){
                        if(link != "http://solucionecovid.epizy.com/resultado-3/"){
                            link = 'http://solucionecovid.epizy.com/resultado-2/'
                        }
                    }else{
                        if(link != "http://solucionecovid.epizy.com/resultado-3/" && link != 'http://solucionecovid.epizy.com/resultado-2/'){

                            link = 'http://solucionecovid.epizy.com/resultado/'
                        }
                    }
                    break;
                }
            } // febretempo
            for (var i = 0; i < febretempo.length; i++) { 
                // Pegando se o cara tá com o cartão atualizado ou nao
                if (febretempo[i].checked) { 
                    marcouNada =false
                    var tempofebre = febretempo[i].value; 
                    if(tempofebre == 3){
                            link = 'http://solucionecovid.epizy.com/resultado-3/'
                    }else if(tempofebre == 2){
                        if(link != "http://solucionecovid.epizy.com/resultado-3/"){
                            link = 'http://solucionecovid.epizy.com/resultado-2/'
                        }
                    }else{
                        if(link != "http://solucionecovid.epizy.com/resultado-3/" && link != 'http://solucionecovid.epizy.com/resultado-2/'){
                            link = 'http://solucionecovid.epizy.com/resultado/'
                        }
                    }
                    break;
                }
            } // febretempo
            for (var i = 0; i < vacinas.length; i++) {
                // Pegando se o cara tá com o cartão atualizado ou nao
                if (vacinas[i].checked) {
                    marcouNada =false
                    var valorSelecionado = vacinas[i].value;
                    link = link+'?vacina='+ valorSelecionado;
                    var marcado = 0
                    for (var y = 0; y < nenhuma.length; y++)
                        if(nenhuma[y].checked){
                            marcado++;
                        }
                        if(marcado == 3){
                            link = 'http://solucionecovid.epizy.com/resultado-0/'+'?vacina='+ valorSelecionado ; 
                        }
                         
                    break;
                }
            }
            if(marcouNada){
                link = 'http://solucionecovid.epizy.com/resultado-0/'+'?vacina=nao'
            }
            window.location.href = link;
        }

        const tela_um   = document.getElementById("etapa_um_form")
        const tela_dois = document.getElementById("etapa_dois_form")
        const tela_tres = document.getElementById("etapa_tres_form")
        const tela_quatro = document.getElementById("etapa_quatro_form")
        const conteiner_um = document.getElementById("conteiner_")
        const caixa_checada = document.getElementById("feb_re")
		
		const conteiner_dois = document.getElementById("tosseCaixa")
        const tosse_checada = document.getElementById("tos_se")


        function proxima_etapa() {
            tela_um.style.display = "none"
            tela_dois.style.display = "block"
            tela_tres.style.display = "none"
            tela_quatro.style.display = "none"
        }

        function proxima_etapa2() {
            tela_um.style.display = "none"
            tela_dois.style.display = "none"
            tela_tres.style.display = "block"
            tela_quatro.style.display = "none"
        }

        function proxima_etapa3() {
            tela_um.style.display = "none"
            tela_dois.style.display = "none"
            tela_tres.style.display = "none"
            tela_quatro.style.display = "block"
        }

        function aparecer_conteiner() {
            if(caixa_checada.checked == true){
                conteiner_um.style.display = "block";
            }
            else{
                conteiner_um.style.display = "none";
            }
        }
		
		function aparecer_tosse() {
            if(tosse_checada.checked == true){
                conteiner_dois.style.display = "block";
            }
            else{
                conteiner_dois.style.display = "none";
            }
    }
    function mostrarTosseCheia(){
      let audio = document.getElementById("Audiotosse_cheia");
      audio.play();
      
    }
    function mostrarTosseSeca(){
      let audio = document.getElementById("Audiotosse_seca");
      audio.play();
        
    }
    </script>
</body>

</html>																													
<?php
	
}


add_shortcode(Lucas, 'Lucas');
add_shortcode(jogo, 'jogo');
add_shortcode(formulario, 'formulario');

