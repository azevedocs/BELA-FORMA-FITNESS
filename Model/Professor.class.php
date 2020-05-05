<?php
Class Professor{
    
    function __construct($nome, $cpf, $data, $endereco, $telefone){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

}
?>