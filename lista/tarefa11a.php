<?php

$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

$maior = $numeros[0];
$menor = $numeros[0];
$posicaoMaior = 0;
$posicaoMenor = 0;
for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
        $posicaoMaior = $i;
    }

    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
        $posicaoMenor = $i;
    }
}
echo "Array: " . implode(", ", $numeros) . "\n\n";
echo "Maior número: " . $maior . "\n";
echo "Posição do maior número: " . $posicaoMaior . "\n\n";
echo "Menor número: " . $menor . "\n";
echo "Posição do menor número: " . $posicaoMenor . "\n";

?>