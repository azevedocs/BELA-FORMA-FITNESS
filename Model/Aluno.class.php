<?php
Class Aluno{
    
    function __construct($nome, $cpf, $data, $endereco, $telefone, $alocar){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data = $data;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->turma = $alocar;
    }

}
?>