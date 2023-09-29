<?php
    // Declare as variáveis
    $var1 = 10;     // Tipo: inteiro
    $var2 = 7;      // Tipo: inteiro
    $var3 = "Olá";  // Tipo: string

    // Verifica se a variável é um número e realiza a multiplicação por 2 se for
    if (is_numeric($var1)) {
        $novoVar1 = $var1 * 2;

        // Verifica se o novo número é maior que 100 e imprime a mensagem correspondente
        if ($novoVar1 > 100) {
            echo "O novo número (" . $novoVar1 . ") é maior que 100. <br>";
        }
    }

    if (is_numeric($var2)) {
        $novoVar2 = $var2 * 2;

        if ($novoVar2 > 100) {
            echo "O novo número (" . $novoVar2 . ") é maior que 100. <br>";
        }
    }

    if (is_numeric($var3)) {
        $novoVar3 = $var3 * 2;

        if ($novoVar3 > 100) {
            echo "O novo número (" . $novoVar3 . ") é maior que 100. <br>";
        }
    }
?>
