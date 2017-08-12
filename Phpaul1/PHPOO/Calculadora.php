<?php

class Calculadora {

    function Soma($valor1, $valor2) {
        $resultado = $valor1 + $valor2;
        echo "<p> Resultado da soma = $resultado ";
    }

    function Divisao($valor1, $valor2) {
        $resultado = $valor1 / $valor2;
        echo "<p> Resultado da Divisão = $resultado ";
    }

    function Subtracao($valor1, $valor2) {
        $resultado = $valor1 - $valor2;
        echo "<p> Resultado da Subtração = $resultado ";
    }

    function Multiplicacao($valor1, $valor2) {
        $resultado = $valor1 * $valor2;
        echo "<p> Resultado da Multiplicação = $resultado ";
    }

}

?>