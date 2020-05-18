<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/painelfuncionario.css">
    <title>Painel-Funcionario</title>
</head>
<body>
    <section class='estrutura'>
    <div class='matricula'>
        <button class='bp'>ACESSAR DADOS DO ALUNO</button>
        <div class='f-trancar'>
        <input type="number" name="" id="" placeholder='CPF DO ALUNO'>
        <button class='funcao'>TRANCAR</button>
        </div>
    </div>

    <div class='base'>
    <form action="" autocomplete="off">
        <H2 id='h01'>CADASTRAR ALUNO</H2>
        <input type="text" name="nome" id="nome" placeholder="Nome do Aluno" require>
        <input type="number" name="cpf" id="" placeholder="CPF do Aluno">
        <input type="date" name="data" id="teste" placeholder="Data de inscrição">
        <input type="text" name="endereco" id="" placeholder="Endereço do Aluno">
        <input type="number" name="telefone" id="" placeholder="Telefone do Aluno">
        <input type="number" name="alocar" id="" placeholder="Numero da turma">
        <input type="submit" value="INCLUIR" name='vai' id='botao'>
    </form>
    </div>

    <div class='mensalidade'>
        <button class='bp'>RECEBER MENSALIDADE</button>
        <div class='f-pagar'>
        <input type="text" name="" id="" placeholder='nome do pagante'>
        <input type="number" name="" id="" placeholder='turma'> 
        <input type="number" name="" id="" placeholder='valor'>
        <button class='funcao'>RECEBER</button>
        </div>
    </div>

    <div class='mensalidade'>
    <button class='bp'>ALOCAR ALUNO</button>
        <div class='f-trancar'>
        <input type="number" name="" id="" placeholder='CPF DO ALUNO'>
        <input type="text" name="" id="" placeholder='Turma que deseja'>
        <button class='funcao'>SOLICITAR ALOCAMENTO</button>
        </div>
    </div>
    </section>

<div class='resultado'>
    <?php
require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Aluno.class.php');
$nome = @$_REQUEST['nome'];
$cpf = @$_REQUEST['cpf'];
$data = @$_REQUEST['data'];
$endereco = @$_REQUEST['endereco'];
$telefone = @$_REQUEST['telefone'];
$alocar = @$_REQUEST['alocar'];
$submit = @$_REQUEST['vai'];

if($submit){

    if($data =="" || $nome ==""){
        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novo = new Aluno($nome, $cpf, $data, $endereco, $telefone, $alocar);
        
        echo "<br/>CADASTRO DE ALUNO CONFIRMADO<br/>";
        echo '<br/>O nome do aluno é: '.strtoupper($novo->nome);
        echo '<br/>O CPF do aluno cadastrado é: '.$novo->cpf;
        echo '<br/>Sua data de nascimento é: '.strtoupper($novo->data); 
        echo '<br/>O endenreço cadastrado foi: '.strtoupper($novo->endereco); 
        echo '<br/>Numero da turma em que foi alocado: '.strtoupper($novo->turma);
        echo '<br/>O numero de telefone cadastrado foi: '.strtoupper($novo->telefone); 

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }


}
?>
</div>

<script src="../View/funcionario.js"></script>
</body>
</html>