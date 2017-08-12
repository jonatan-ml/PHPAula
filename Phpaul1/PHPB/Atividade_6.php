<?php

$val_gas = 3.9;
$val_alc = 3;

$v = $val_gas * 0.7;

if ($v > $val_alc) {
    echo "Abasteça com Álcool";
} else
    echo "Abasteça com Gasolina";
?>