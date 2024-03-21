<?php

fscanf(STDIN, "%d %d %d", $a, $b, $c);

function maximo($x, $y) {
    return ($x + $y + abs($x - $y)) / 2;
}
$maiorAB = maximo($a, $b);

$maior = maximo($maiorAB, $c);

echo $maior . " eh o maior\n";

?>
