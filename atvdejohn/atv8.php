<?php

function criptografar($text) {
$resultado = '';
$tam_text = strlen($text);
for ($i = 0; $i < $tam_text; $i++) {
    $caractere = $texto[$i];
    if (ctype_alpha($caractere)) {
        $novo_caractere = chr(ord($caractere) + 3);
        if ((ctype_upper($caractere) && $novo_caractere > 'Z') || (ctype_lower($caractere) && $novo_caractere > 'z')) {
            $novo_caractere = chr(ord($novo_caractere) - 26);
        }
        $resultado .= $novo_caractere;
    } else {
        $resultado .= $caractere;
    }
}

    $resultado = strrev($resultado);
    $mett = intval(strlen($resultado) / 2);
    for ($l = $mett; $l < strlen($resultado); $l++) {
        $caractere = $resultado[$l];
        if (ctype_alpha($caractere)) {
            $caractere = chr(ord($caractere) - 1);
        }
        $resultado[$l] = $caractere;
    }

    return $resultado;
}

$quantidadeCasos = intval(trim(fgets(STDIN)));

for ($m = 0; $m < $quantidadeCasos; $m++) {
    $quantidadeLinhas = intval(trim(fgets(STDIN)));
    for ($n = 0; $n < $quantidadeLinhas; $n++) {
        $linhaTexto = trim(fgets(STDIN));
        echo criptografar($linhaTexto) . "\n";
    }
}

?>