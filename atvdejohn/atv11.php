<?php

 $N = intval(trim(fgets(STDIN)));

 $valores = [];
 for ($i = 0; $i < $N; $i++) {
     $valores[] = intval(trim(fgets(STDIN)));
 }

 $pares = [];
 $impares = [];
 foreach ($valores as $valor) {
     if ($valor % 2 == 0) {
         $pares[] = $valor;
     } else {
         $impares[] = $valor;
     }
 }

 sort($pares);
 rsort($impares);

 foreach ($pares as $valor) {
     echo $valor . "\n";
 }

 foreach ($impares as $valor) {
     echo $valor . "\n";
 }

 ?>