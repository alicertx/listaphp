<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$t = 0;
$maior = $notas[0];
$menor = $notas[0];
$maiorOuIgual6 = 0;
$menor6 = 0;

foreach ($notas as $nota) {
    $t += $nota;

    if ($nota >= 6) {
        $maiorOuIgual6++;
    } else {
        $menor6++;
    }

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$q = count($notas);
$media = $t / $q;

echo "A média das notas é: " . $media . "<br>";
echo "Alunos com nota maior ou igual a 6: " . $maiorOuIgual6 . "<br>";
echo "Alunos com nota menor que 6: " . $menor6 . "<br>";
echo "A maior nota é: " . $maior . "<br>";
echo "A menor nota é: " . $menor;
?>


