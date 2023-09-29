<?php 
    //Declaração de variáveis
    $valor1 = 27.5;
    $valor2 = 74;
    $valor3 = "Fabricio";

    //--------------------------------Valor 1-----------------------------
    if (is_numeric($valor1)) {
        $resultado1 = $valor1 * 2;

        if ($resultado1 > 100) {
            echo "O número " .$resultado1. " é maior que 100";
        } else {
            echo "O número " .$resultado1. " não é maior que 100";
        }

    } else {
        echo $valor1. " não é um número";
    }
    echo "<br>";

    //-------------------------------Valor 2-------------------------------------
    if (is_numeric($valor2)) {
        $resultado2 = $valor2 * 2;

        if ($resultado2 > 100) {
            echo "O número " .$resultado2. " é maior que 100";
        } else {
            echo "O número " .$resultado2. " não é maior que 100";
        }

    } else {
        echo $valor2. " não é um número";
    }
    echo "<br>";
    
    //---------------------------------Valor 3-----------------------------------
    if (is_numeric($valor3)) {
        $resultado3 = $valor3 * 2;

        if ($resultado3 > 100) {
            echo "O número " .$resultado3. " é maior que 100";
        } else {
            echo "O número " .$resultado3. " não é maior que 100";
        }

    } else {
        echo $valor3. " não é um número";
    }
    
?>