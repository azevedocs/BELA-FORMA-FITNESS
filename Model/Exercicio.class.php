<?php
Class Exercicio{
    
    function __construct($nome, $acessorio, $regiaomuscular, $objetivo, $quantidadePessoas, $img){
        $this->nome = $nome;
        $this->acessorio = $acessorio;
        $this->regiaomuscular = $regiaomuscular;
        $this->objetivo = $objetivo;
        $this->quantidadePessoas = $quantidadePessoas;
        $this->img = $img;
    }
}
?>