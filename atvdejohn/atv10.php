<?php


function decodeCesarCipher($string, $desloc) {
    $decoded = '';
    foreach (str_split($string) as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $ascii -= $desloc;
            if (ctype_upper($char) && $ascii < ord('A')) {
                $ascii += 26;
            }
            if (ctype_lower($char) && $ascii < ord('a')) {
                $ascii += 26;
            }
            $decoded .= chr($ascii);
        } else {
            $decoded .= $char;
        }
    }
    return $decoded;
}


$N = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $N; $i++) {
    
    $string = trim(fgets(STDIN));
    $desloc = intval(trim(fgets(STDIN)));

    
    echo decodeCesarCipher($string, $desloc) . "\n";
}

?>