<?php

while (true) {
 
    fscanf(STDIN, "%d %d %d %d", $H1, $M1, $H2, $M2);

    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    }

    $minutosAtual = $H1 * 60 + $M1;
    $minutosAlarme = $H2 * 60 + $M2;
    $minutosRestantes = ($minutosAlarme - $minutosAtual + 24 * 60) % (24 * 60);

    echo $minutosRestantes . "\n";
}

?>