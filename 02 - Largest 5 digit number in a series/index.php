<?php

// Mostrar el numero mas grande que hay en un string

$s = '1234567890';
$aux = 0;
$max = 0;

for ($i = 5, $j = 0; $i <= strlen($s); $i++, $j++) {

    $aux = $max;
    $max = substr($s, $j, 5);

    if ($max < $aux) {
        $max = $aux;
    }
}

echo $max;