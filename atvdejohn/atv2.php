<?php


fscanf(STDIN, "%d", $valor);

$notas = [100, 50, 20, 10, 5, 2, 1];

echo $valor . "\n"; 


foreach ($notas as $nota) {

    $quantidade = intval($valor / $nota);
    

    $valor %= $nota;
    

    echo $quantidade . " nota(s) de R$ " . $nota . ",00\n";
}

?>
