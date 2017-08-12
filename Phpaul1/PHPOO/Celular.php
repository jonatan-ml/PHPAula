<?php

class Celular {

    var $nome;
    var $marca;
    var $tamanhoDaTela;
    var $memoriaInterna;
    var $memoriaRam;
    var $preco;

    function Celular($nome, $marca, $tamanhoDaTela, $memoriaInterna, $memoriaRam, $preco) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tamanhoDaTela = $tamanhoDaTela;
        $this->memoriaInterna = $memoriaInterna;
        $this->memoriaRam = $memoriaRam;
        $this->preco = $preco;
    }

    function ImprimeDados() {
        echo "Nome: $this->nome <p> Marca: $this->marca <p> Tamanho Da tela: $this->tamanhoDaTela <p> Memoria Interna: $this->memoriaInterna <p> Memoria Ram: $this->memoriaRam <p> Preco: $this->preco;";
    }

}

?>