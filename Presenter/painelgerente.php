<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/painelgerente.css">
    <title>Painel-Gerente</title>
</head>
<body>
<div class='Modal'>
    <div class='Imodal'>
        <div class='top'>DIGITE SEU RELATORIO<button class='fbotao'>X</button></div>
        <div class='cModal'>
            <form action="">
                <textarea name="" id="" cols="43" rows="21"></textarea>
                <input class='butaoE' type="submit" value="ENVIAR" id='Vaim'>
            </form>
        </div>
    </div>
</div>

    <div class="estrutura">
<div class="segura-p">
    <form action="" autocomplete="off">
        <H2 id='h01'>CADASTRAR PROFESSOR</H2>
        <input type="text" name="nomeP" id="nomeP" placeholder="Nome do Professor">
        <input type="number" name="cpfP" id=""  placeholder="CPF do Professor">
        <input type="date" name="dataP" id="tested" placeholder="Data de inscrição">
        <input type="text" name="enderecoP" id="" placeholder="Endereço do Professor">
        <input type="number" name="telefoneP" id="" placeholder="Telefone do Professor">
        <input type="submit" value="INCLUIR" name='vaiP' id='botaoP'>
    </form>
</div>

<div class="segura-f">
    <button class='botao'>GERAR RELATORIO</button>
    <form action="" autocomplete="off">
        <h2 id='h02'>CADASTRAR FUNCIONARIO</h2>
        <input type="text" name="nomeF" id="" placeholder="Nome do funcionario">
        <input type="number" name="cpfF" id=""  placeholder="CPF do funcionario">
        <input type="date" name="dataF" id="" placeholder="Data de inscrição do funcionario">
        <input type="text" name="enderecoF" id="" placeholder="Endereço do funcionario">
        <input type="number" name="telefoneF" id="" placeholder="Telefone do funcionario" >
        <input type="submit" value="INCLUIR" name='vaiF' id="botaoF">
    </form>
</div>

<div class="segura-e">
    <form action="" enctype="multipart/form-data" autocomplete="off">
        <h2 id='h03'>CADASTRAR EXERCICIO</h2>
        <input type="text" name="nomeE" id="nomeE" placeholder="nome do exercicio">
        <input type="text" name="acessorioE" id="acessorioE" placeholder="Acessorio">
        <input type="text" name="regiaoE" id="regiaoE" placeholder="Região muscular">
        <input type="text" name="objetivoE" id="objetivoE" placeholder="Objetivo do exercicio">
        <select name="quantidadePessoas" id=""><option value="Selecione">Selecione</option>
        <option value="Individual">Individual</option>
        <option value="Dupla">Dupla</option>
        <option value="Grupo">Grupo</option></select>
        <input type="file" name="$img" id="" placeholder="ESCOLHA UMA IMAGEM">
        <input type="submit" value="INCLUIR" name='vaiE' id="botaoE">
    </form>
</div>
</div>

<!-----codigo php Cadastrar Pessoa ----->
    <div class='segura-r'>
<?php
require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Professor.class.php');
$nome = @$_REQUEST['nomeP'];
$cpf = @$_REQUEST['cpfP'];
$data = @$_REQUEST['dataP'];
$endereco = @$_REQUEST['enderecoP'];
$telefone = @$_REQUEST['telefoneP'];
$submit = @$_REQUEST['vaiP'];

if($submit){

    if($data =="" || $nome ==""){
        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novo = new Professor($nome, $cpf, $data, $endereco, $telefone);
        
        echo "<br/>CADASTRO DE PROFESSOR CONFIRMADO<br/>";
        echo '<br/>O nome do professor é: '.strtoupper($novo->nome);
        echo '<br/>Seu CPF é: '.$novo->cpf;
        echo '<br/>Sua data de nascimento é: '.strtoupper($novo->data); 
        echo '<br/>O endenreço cadastrado foi: '.strtoupper($novo->endereco); 
        echo '<br/>O numero de telefone cadastrado foi: '.strtoupper($novo->telefone); 

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }


}

/* Codigo cadastrar Funcionario**/

require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Funcionario.class.php');
$nomeF = @$_REQUEST['nomeF'];
$idadeF = @$_REQUEST['idadeF'];
$cpfF = @$_REQUEST['cpfF'];
$enderecoF = @$_REQUEST['enderecoF'];
$telefoneF = @$_REQUEST['telefoneF'];
$submitF = @$_REQUEST['vaiF'];

if($submitF){

    if( $dataF =="" || $nomeF ==""){

        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novoF = new Funcionario($nomeF, $cpfF, $dataF, $enderecoF, $telefoneF);
        
       echo "<br/>CADASTRO DE FUNCIONARIO CONFIRMADO<br/>";
       echo '<br/>O nome do funcionario é: '.strtoupper($novoF->nome);
       echo '<br/>O CPF do funcionario cadastrado: '.$novoF->cpf;
       echo '<br/>Sua data de nascimento é: '. $novoF->data; 
       echo '<br/>O endenreço do funcionario cadastrado é: '.strtoupper($novoF->endereco); 
       echo '<br/>O numero de telefone cadastrado foi: '.strtoupper($novoF->telefone); 

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }

}
    /* Codigo cadastrar Exercicio**/

require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Exercicio.class.php');

$nomeE = @$_REQUEST['nomeE'];
$acessorioE = @$_REQUEST['acessorioE'];
$regiaoE = @$_REQUEST['regiaoE'];
$objetivoE = @$_REQUEST['objetivoE'];
$quantidadeE = @$_REQUEST['quantidadePessoas'];
$img = @$_REQUEST['img'];
$submitE = @$_REQUEST['vaiE'];


if($submitE){

    if($nomeE == "" || $regiaoE == "" || $quantidadeE == ""){
        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novoE = new Exercicio($nomeE, $acessorioE, $regiaoE, $objetivoE, $quantidadeE, $img);
        
       echo "<br/>CADASTRO DE NOVO EXERCICIO CONFIRMADO<br/>";
       echo '<br/>O NOME do exercicio é: '.strtoupper($novoE->nome) . ' foi cadastrado com sucesso';
       echo '<br/>O acessorio que se utilizado junto a o exercicio é: '.strtoupper($novoE->acessorio);
       echo '<br/>A região muscular que ele ira trabalhar é: '.strtoupper($novoE->regiaomuscular);
       echo '<br/>O objetivo do exercicio é: '.strtoupper($novoE->objetivo); 
       echo '<br/>A quantidade de pessoas do exercicio é: '.$novoE->quantidadePessoas;
       echo '<br/>Upload de Imagem feito com sucesso ';  

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }
}
?>
</div>

<script src="../View/modal.js"></script>
</body>

</html>