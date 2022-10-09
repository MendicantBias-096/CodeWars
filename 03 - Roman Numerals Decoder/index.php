<?php

// Convertir un numero Romano en Decimal

$number = 0;
$roman = 'CDXCIV';
$singleRomanChar = '';


// M 1000 CM 900 D 500 CD 400 C 100 XC 90 L 50 XL 40 X 10 IX 9 V 5 IV 4 I 1

for ($i = strlen($roman) - 1; $i >= 0; $i--) {

    $singleRomanChar = $roman[$i];

    switch ($singleRomanChar) {

        case 'I':
            $number += 1;
            echo "si";
            break;

        case 'V':

            if ($roman[$i - 1] ==  'I') {
                $number += 3;
            } else {
                $number += 5;
            }

            break;

        case 'X':

            if ($roman[$i - 1] == 'I') {
                $number += 8;
            } else {
                $number += 10;
            }
            break;

        case 'L':

            if ($roman[$i - 1] == 'X') {
                $number += 30;
            } else {
                $number += 50;
            }
            break;

        case 'C':

            if ($roman[$i - 1] == 'X') {
                $number += 80;
            } else {
                $number += 100;
            }
            break;

        case 'D':

            if ($roman[$i - 1] == 'C') {
                $number += 300;
            } else {
                $number += 500;
            }
            break;

        case 'M':

            if ($roman[$i - 1] == 'C') {
                $number += 800;
            } else {
                $number += 1000;
            }
            break;

        default:
            echo "Este caracter no es valido en la numeracion romana";
            break;
    }
}

echo "Numero Romano: $roman \n";
echo "Numero Decimal: $number";