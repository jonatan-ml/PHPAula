<?php

$A=3;
$B=400;
$C=400;
$D=(-2);

$soma = $A + $D;
$div = $B / $C;

if($soma > $div){
    echo "A soma é maior que a divisão";
}elseif ($soma < $div){
    echo "A soma é menor que a divisão";
}else {
    echo "A soma é igual a divisão";
}
?>
