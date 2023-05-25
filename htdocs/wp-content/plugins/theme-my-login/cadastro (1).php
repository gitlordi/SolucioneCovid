<?php
    ?><link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
            <script>
                alert("http://solucionecovid.epizy.com");
            </script>
            <?php

    define( 'DB_NAME', 'epiz_33861218_w854' );

    /** Database username */
    define( 'DB_USER', '33861218_1' );

    /** Database password */
    define( 'DB_PASSWORD', '45]!KpIjS1' );

    /** Database hostname */
    define( 'DB_HOST', 'sql201.byetcluster.com' );

    /** Database charset to use in creating database tables. */
    define( 'DB_CHARSET', 'utf8mb4' );

    /** The database collate type. Don't change this if in doubt. */
    define( 'DB_COLLATE', '' );

    $con = mysqli_connect(DB_HOST,DB_USER,DB_USER,DB_NAME);
    if ($con->connect_error) {
        die("Connection failed: ".$conn->connect_error);
        echo "Error de conexao ao servidor";
          ?>
            <script>
                window.location.href = "http://solucionecovid.epizy.com";
            </script>
            <?php
    }
    if(empty($_POST)){
        echo "<h2>Infelizmente a variavel POST esta vazia, teremos que programa tudo na mão</h2>";
    }
    else{
  
            $nome             = $_POST['nome'];
            $cpf              = $_POST['cpf'];
            $datadenascimento = $_POST['datadenascimento'];
            $sexo           = $_POST['sexo'];
            $telefone       = $_POST['numerodetelefone'];
            $estado         = $_POST['estado'];
            $cidade         = $_POST['cidade'];
            $bairro         = $_POST['bairro'];
            $rua            = $_POST['rua'];
            $cep            = $_POST['cep'];
            $complemento    = $_POST['complemento_endereco'];
            $email          = $_POST['email'];
            $confEmail      = $_POST['confirmaremail'];
            $senha          = $_POST['senha'];
            $ConfSenha      = $_POST['confirmarsenha'];
        if($confEmail != $email){
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Os e-mails digitados não estão iguais!',
                showConfirmButton: false,
                timer: 1500
            })
             ?>
            <script>
                window.location.href = "http://solucionecovid.epizy.com/cadastro";
            </script>
            <?php 
        }

        if($confSenha != $senha){
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'As senhas digitadas não estão iguais!',
                showConfirmButton: false,
                timer: 1500
            })
             ?>
            <script>
                window.location.href = "http://solucionecovid.epizy.com/cadastro";
            </script>
            <?php 
        }
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('Y-m-d H:i:s');
        $NameReplace = str_replace(" ","-", $valor);
        $senha       = md5($senha);

        $sql = 'INSERT INTO `wpc9_users` (ID, user_login, user_pass, user_nicename, user_email, user_registered, display_name, CPF, sexo, nascimento, telefone, CEP, estado, cidade, bairro, rua, numero) VALUES (0,'.$nome'., '.$senha.', '.$NameReplace.', '.$email.', '.$dataAtual.', '.$nome.', '.$cpf.', '.$sexo.', '.$datadenascimento.', '.$telefone.', '.$cep.', '.$estado.', '.$cidade.''.$bairro.''.$rua.''.$numero.')';

        if ($conn->query($sql) === TRUE) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Usuario cadastrado com sucesso',
                showConfirmButton: false,
                timer: 1000
            })
            ?>
            <script>
                window.location.href = "http://solucionecovid.epizy.com/login/";
            </script>
            <?php
          
        } 
        else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
                ?>
            <script>
                window.location.href = "http://solucionecovid.epizy.com";
            </script>
            <?php
        } // */


    }




?>