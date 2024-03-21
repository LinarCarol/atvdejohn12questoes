<?php


function somaConsecutivos($m, $n) {
    $soma = 0;
    $menor = min($m, $n);
    $maior = max($m, $n);
    
    for ($i = $menor; $i <= $maior; $i++) {
        echo $i . " ";
        $soma += $i;
    }
    
    return $soma;
}

while (true) {
    fscanf(STDIN, "%d %d", $m, $n);
    
  
    if ($m <= 0 || $n <= 0) {
        break;
    }
    
    $soma = somaConsecutivos($m, $n);
    
    echo "Sum=" . $soma . "\n";
}

?>
