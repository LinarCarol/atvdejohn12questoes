<?php

function ledsNecessarios($numero) {
    $leds_por_numero = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6, 0];
    return array_sum(array_map(function($digito) use ($leds_por_numero) {
        return $leds_por_numero[$digito];
    }, str_split($numero)));
}

fscanf(STDIN, "%d\n", $casos);

for ($i = 0; $i < $casos; $i++) {
    fscanf(STDIN, "%s\n", $valor);
    echo ledsNecessarios($valor) . " leds\n";
}

?>