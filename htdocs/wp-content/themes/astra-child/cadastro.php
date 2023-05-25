<?php
 

    if(empty($_POST)){

        echo "<h2>Infelizmente a variavel POST esta vazia, teremos que programa tudo na mão</h2>";
    }
    else{
        echo "Temos acesso <br> Aos seguintes dados: <br>";
        $nome        = $_POST['nome'];
        $rua         = $_POST['rua'];
        $bairro      = $_POST['bairro'];
        $estado      = $_POST['estado'];
        $CEP         = $_POST['CEP'];
        $complemento = $_POST['complemento'];
        echo "<br>".$nome;
        echo "<br>".$rua;
        echo "<br>".$bairro;
        echo "<br>".$estado;
        echo "<br>".$CEP;
        echo "<br>".$complemento;
    }




?>