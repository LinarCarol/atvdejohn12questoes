<?php

while (fscanf(STDIN, "%d", $numLesmas) === 1) {
    $velocidades = explode(" ", fgets(STDIN));
    $maiorVelocidade = max($velocidades); 

    if ($maiorVelocidade < 10) {
        echo "1\n"; 
    } elseif ($maiorVelocidade < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}

?>
