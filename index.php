<?php

/**
 * 1. Affichez dans un <p> la valeur absolue de -8
 */
$value = -8;
$res = abs($value);
// TODO Votre code ici.
echo "<p>$res</p>";

/**
 * 2. Affichez dans un <p> la valeur de 5.64 arrondit au nombre supérieur.
 */
$value = 5.64;
$res = ceil($value);
// TODO Votre code ici.
echo "<p>$res</p>";

/**
 * 3. Affichez dans un <p> la valeur de 5.34 arrondit au nombre inférieur.
 */
$value = 5.34;
// TODO Votre code ici.
$res = round($value);
echo "<p>$res</p>";

/**
 * 4. Affichez dans un <p> la valeur maximum du tableau $max, et la valeur minimum du tableau $min.
 */
$max = [5, 10, 12, 8, 7, 6, 54, 39, 76, 63, 84, 2, 21];
$min = [5, 41, 65, 4, 3, 65, 2, 65, 74, 51, 23, 39, 42];
// TODO Votre code ici.
$res = max($max);
$res2 = min($min);
echo "<p>$res</p>";
echo "<p>$res2</p>";

/**
 * 5. Affichez dans un <p> la valeur de PI * 2 ( avec une fonction mathématique pour PI ).
 */

// TODO Votre code ici.

$res = pi() * 2;
echo "<p>$res</p>";
/**
 * 6. Affichez dans un <p> la valeur arrondie de 5.42 avec la fonction round().
 */
$value = 5.42;
$test = round($value);
// TODO Votre code ici.
echo "<p>$test</p>";

