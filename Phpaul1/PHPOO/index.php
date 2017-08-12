<?php

include("Celular.php");

$Motoz = new Celular("Moto Z Play", "Motorola", 5.5, 32, 4, 1800);
$Motoz->ImprimeDados();


include("Calculadora.php");
$calc = new Calculadora();
$calc->Soma(10, 20)
?>

