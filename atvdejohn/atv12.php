<?php


$N = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $N; $i++) {
    
    fscanf(STDIN, "%d %d", $F1, $F2);

    $mdc = gcd($F1, $F2);

    echo $mdc . "\n";
}

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

?>