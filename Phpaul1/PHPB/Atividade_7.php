<?php

$tam = 1.75;
$sexo = "M";

if ($sexo == "M") {
    $h = (72.7 * $tam) - 58;
    echo "Peso" . " " . $h;
} elseif ($sexo == "F") {
    $m = (62.1 * $tam) - 44;
    echo "Peso" . " " . $m;
}
?>