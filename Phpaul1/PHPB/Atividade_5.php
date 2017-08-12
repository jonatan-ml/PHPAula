<?php

$n1 = 3;
$n2 = 3;
$n3 = 3;
$n4 = 3;

$soma = $n1 + $n2 + $n3 + $n4;
$nota = $soma / 4;


if ($nota > 7) {
    echo "Aprovado";
} elseif ($nota > 5 && $nota < 7) {
    echo "Exame";
} elseif ($nota < 5) {
    echo "Reprovado";
}
?>