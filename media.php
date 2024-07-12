<?php
$nota1 = 10.0;
$nota2 = 6.5;
$nota3 = 5.0;

$media = ($nota1 + $nota2 + $nota3) / 3;
$mediaFormatado = number_format($media, 2);

if ($media >= 7.0) {
    $situacao = "Este aluno está Aprovado";
} elseif ($media >= 5.0 && $media < 7.0) {
    $situacao = "Este aluno está em Recuperação";
} else {
    $situacao = "Este aluno está Reprovado";
}

echo "Média final: $mediaFormatado <br>";
echo "Situação: $situacao";
?>
