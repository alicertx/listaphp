<?php

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

$somaGeral = 0;
$maiorMedia = 0;
$menorMedia = 10;
$alunoMaior = "";
$alunoMenor = "";

foreach ($alunos as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo $aluno["nome"] . " - Média: " . $media . " - " . $situacao . "<br>";

    $somaGeral += $media;

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $alunoMaior = $aluno["nome"];
    }

    if ($media < $menorMedia) {
        $menorMedia = $media;
        $alunoMenor = $aluno["nome"];
    }
}

$mediaGeral = $somaGeral / count($alunos);

echo "<br>Aluno com maior média: $alunoMaior - $maiorMedia<br>";
echo "Aluno com menor média: $alunoMenor - $menorMedia<br>";
echo "Média geral da turma: $mediaGeral";

?>