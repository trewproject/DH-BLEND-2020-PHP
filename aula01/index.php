<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Aula 01</title>
</head>
<body>
    <?php  
        $titulo = "Tales";
    ?>
    <h1>
        <?php
            echo $titulo;
        ?>
    </h1>
    
    <!-- Condicionais -->
    <!-- IF - ELSE -->
    <!-- <?php
        $idade = 19;
        if($idade >= 18){
            echo "<h1>Pode Levar</h1>";
        }
        else{
            echo "Não pode não, nega";
        }
    ?>
     -->
    <!-- Exercicio de IF-ELSE -->
    <p>Exercicio de Condicionais</p>
    <h2>IF -- ELSE</h2>
    <p>1- Verificar se uma pessoa pode votar ou não, ou se essa pessoa possui voto facultativo</p>
    <?php
        $idade = 70;
        echo $idade;
        if ($idade >=18 && $idade <= 70){
            echo " - Você deve votar <br>";
        }
        else if(($idade >= 16 && $idade < 18) || ($idade > 70)){
            echo " - seu voto é facultativo <br>";
        }
        else {
            echo " - Tu não pode votar não, guri <br>";
        }
    ?>
    <hr>
    <!-- SWITCH -->
    <h2>SWITCH</h2>
    <p>2- Verificar se a variavel é 0 e retornar que retornou 0. Se a variavel foir 1, retornar 1, se for qqr outro número, volta qqr merda</p>
    <?php  
        $valorInformado = 0;
        switch ($valorInformado){
            case 0:
                echo "O valor retornado é " .$valorInformado;
                break;
            case 1:
                echo "O valor retornado é 1".$valorInformado ;
                break;
            default:
                echo "Você informou qqr merda diferente de 0 e 1".$valorInformado;
                break;
        }
    ?>
    <hr>

    <!-- ARRAY -->
    <h2>ARRAYS</h2>
    <p>Array Simples</p>
    <?php
        $animais = [
            "Renato",
            "Arrombado",
            "Gosta de Meninos e Meninas",
            "Estojo de pica"
        ];
        echo "<pre>";
        echo var_dump($animais);
        echo "</pre>";
        ?><br><?php

        $estojo = array(
            "Renato", 
            "Arrombado", 
            "Estojo de Pica"
        );
    echo "<pre>";
    var_dump($estojo);
    echo "</pre>";
    ?>
    <p>Array Simples</p>
    <?php
     $usuario = [
        "email" => "talesdealmeida@gmail.com",
        "senha" => "123456"
     ];
     echo "<pre>";
     var_dump($usuario);
     echo "</pre>";
    ?>
</body>
</html>