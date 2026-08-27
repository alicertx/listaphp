<?php

$numeros = [15, 8, 35, 42, 11, 27, 39];

$maior = $numeros[0];
$segundoMaior = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $segundoMaior = $maior;
        $maior = $numero;
    } elseif ($numero > $segundoMaior && $numero != $maior) {
        $segundoMaior = $numero;
    }
}

echo "Maior número: $maior<br>";
echo "Segundo maior: $segundoMaior";

?>