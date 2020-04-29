<?php
Class Funcionario{
    
    function __construct($nome, $idade, $data, $endereco, $telefone){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->data = $data;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

}
?>