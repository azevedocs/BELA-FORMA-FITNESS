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
        <div class='top'>DIGITE SEU RELATORIO <button class='fbotao'>X</button></div>
        <div class='cModal'>
            <form action="">
                <textarea name="" id="" cols="43" rows="21"></textarea>
                <input class='butaoE' type="submit" value="ENVIAR">
            </form>
        </div>
    </div>
</div>

    <div class="estrutura">
<div class="segura-p">
    <form action="">
        <H2 id='h01'>CADASTRAR PROFESSOR</H2>
        <input type="number" name="idP" id="" maxlength="2" placeholder="Numero de inscrição do Professor">
        <input type="text" name="nomeP" id="" placeholder="Nome do Professor">
        <input type="number" name="idadeP" id="" maxlength="2" placeholder="Idade do Professor">
        <select name="sexoP" id=""><option value="Selecione">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outros">Outros</option></select>
        <input type="submit" value="INCLUIR" name='vaiP'>
    </form>
</div>

<div class="segura-f">
    <button class='botao'>GERAR RELATORIO</button>
    <form action="">
        <h2 id='h02'>CADASTRAR FUNCIONARIO</h2>
        <input type="number" name="idF" id="" maxlength="2" placeholder="Numero de inscrição do funcionario">
        <input type="text" name="nomeF" id="" placeholder="Nome do funcionario">
        <input type="number" name="idadeF" id="" maxlength="2" placeholder="Idade do funcionario">
        <select name="sexoF" id=""><option value="Selecione">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outros">Outros</option></select>
        <input type="submit" value="INCLUIR" name='vaiF'>
    </form>
</div>

<div class="segura-e">
    <form action="" enctype="multipart/form-data">
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
        <input type="submit" value="INCLUIR" name='vaiE'>
    </form>
</div>
</div>

<!-----codigo php Cadastrar Pessoa ----->
    <div class='segura-r'>
<?php
require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Professor.class.php');
$id = @$_REQUEST['idP'];
$nome = @$_REQUEST['nomeP'];
$idade = @$_REQUEST['idadeP'];
$sexo = @$_REQUEST['sexoP'];
$submit = @$_REQUEST['vaiP'];


if($submit){

    if($id ==""){
        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novo = new Professor($id, $nome, $idade, $sexo);
        
       echo "<br/>CADASTRO DE PROFESSOR CONFIRMADO<br/>";
       echo '<br/>O ID do professor é: '. $novo->id .' foi cadastrado com sucesso';
       echo '<br/>O nome do professor é: '.strtoupper($novo->nome);
       echo '<br/>Sua idade é: '.$novo->idade .'.';
       echo '<br/>Seu sexo é: '.strtoupper($novo->sexo); 

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }


}

/* Codigo cadastrar Funcionario**/

require('D:\XAMP\htdocs\BELA-FORMA-FITNESS\Model\Funcionario.class.php');
$idF = @$_REQUEST['idF'];
$nomeF = @$_REQUEST['nomeF'];
$idadeF = @$_REQUEST['idadeF'];
$sexoF = @$_REQUEST['sexoF'];
$submitF = @$_REQUEST['vaiF'];


if($submitF){

    if( $idF ==""){
        echo "<script language=javascript>alert( 'Por favor, preencha todos os campos!!' );</script>";
        
    }
    
    else{
       
        $novoF = new Funcionario($idF, $nomeF, $idadeF, $sexoF);
        
       echo "<br/>CADASTRO DE FUNCIONARIO CONFIRMADO<br/>";
       echo '<br/>O ID do funcionario é: '. $novoF->id . ' foi cadastrado com sucesso';
       echo '<br/>O nome do funcionario é: '.strtoupper($novoF->nome);
       echo '<br/>Sua idade é: '.$novoF->idade .' anos';
       echo '<br/>Seu sexo é: '.strtoupper($novoF->sexo); 

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
       echo '<br/>Imagem do exercicio '.$novoE->img;  

       echo "<script language=javascript>alert( 'Inserção, feita com sucesso!!' );</script>";
    }
}
?>
</div>

<script src="../View/modal.js"></script>
</body>

</html>