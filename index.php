<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bela Forma Fitness Login</title>
    <link rel="stylesheet" href="./css/login-principal.css">
</head>
<body>

    <section class="p-estrutura">
        <div class="login">
            <div class="mensagem">
                <p class="mensagem1">FAÇA O LOGIN</p>
            </div>
            <div class="t-login">
                <div class="segura-1 principal">
                    <div class="gerente">
                        <button class="b">GERENTE</button>
                    </div>
                    <div class="funcionario">
                        <button class="b">FUNCIONARIO</button>
                    </div>
                    <div class="professor">
                        <button class="b">PROFESSOR</button>
                    </div>
                </div>
                <!--Dados do login do gerente pegar com php para fazer a verificação-->
                <div class="login-gerente pegar">
                    <a href="index.php"><img class="r-img" src="./img/returnn.png" alt=""></a>
                <form action="" method="post">
                    <h1 class="h1g">GERENTE</h1>
                    <label for="nomeg">Login</label>
                    <input type="text" name="nome1" id="nomeg" autocomplete="off" required >
                    <label for="senhag">Senha</label>
                    <input type="password" name="senha1" id="senhag" autocomplete="off" required >
                    <input type="submit" class="entrar-g" name="submit1" value="Entrar">
                </form>
            </div>
            <!--Dados do login do funcionario pegar com php para fazer a verificação-->
                <div class="login-funcionario pegar">
                        <a href="index.html"><img class="r-img" src="./img/returnn.png" alt=""></a>
                    <form action="" method="post">
                        <h1 class="h1f">FUNCIONARIO</h1>
                        <label for="nomef">Login</label>
                        <input type="text" name="nome2" id="nomef" autocomplete="off" required maxlength="50">
                        <label for="senhaf">Senha</label>
                        <input type="password" name="senha2" id="senhaf" autocomplete="off" required maxlength="50">
                        <input type="submit" class="entrar-f" name="submit2" value="Entrar">
                    </form>
                </div>
            <!-----Dados do login de professor pegar com php para fazer a verificação-->
                <div class="login-professor pegar">
                        <a href="index.html"><img class="r-img" src="./img/returnn.png" alt=""></a>
                    <form action="" method="post">
                        <h1 class="h1p">PROFESSOR</h1>
                        <label for="nomep">Login</label>
                        <input type="text" name="nome3" id="nomep" autocomplete="off" required maxlength="50">
                        <label for="senhap">Senha</label>
                        <input type="password" name="senha3" id="senhap" autocomplete="off" required maxlength="50">
                        <input type="submit" class="entrar-p" name="submit3" value="Entrar">
                    </form>
                </div>
            </div>
            
        </div>
    </section>

    <?php
    /*primeiro login*/

				/* Declaração de Variáveis */
				$userg = @$_REQUEST['nome1'];
				$passg = @$_REQUEST['senha1'];
				$submitg = @$_REQUEST['submit1'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'felipe';
				$pass1 = '123';
				
				$user2 = 'gabriel';
				$pass2 = '123';
				
				/* Testa se o botão submit foi ativado */
				if($submitg){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($userg == "" || $passg == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($userg == $user1 && $passg == $pass1) || ($userg == $user2 && $passg == $pass2)){
							session_start();
							$_SESSION['usuario']=$userg;
							$_SESSION['senha']=$passg;
							header("Location: painelgerente.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
                }
                /* Segundo login*/
                $userf = @$_REQUEST['nome2'];
				$passf = @$_REQUEST['senha2'];
                $submitf = @$_REQUEST['submit2'];
                
                $user3 = 'felipe';
				$pass3 = '123';
				
				$user4 = 'gabriel';
                $pass4 = '123';
                
                if($submitf){

                    if($userf == "" || $passf == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
                    }
                    else{
						if(($userf == $user1 && $passf == $pass1) || ($userf == $user2 && $passf == $pass2)){
							session_start();
							$_SESSION['usuario']=$userf;
							$_SESSION['senha']=$passf;
							header("Location: painelfuncionario.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}

                }
                /*Terceiro login*/
                $userp = @$_REQUEST['nome3'];
				$passp = @$_REQUEST['senha3'];
                $submitp = @$_REQUEST['submit3'];
                
                $user5 = 'felipe';
				$pass5 = '123';
				
				$user6 = 'gabriel';
                $pass6 = '123';

                if($submitp){

                    if($userp == "" || $passp == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
                    }
                    else{
						if(($userp == $user1 && $passp == $pass1) || ($userp == $user2 && $passp == $pass2)){
							session_start();
							$_SESSION['usuario']=$userp;
							$_SESSION['senha']=$passp;
							header("Location: painelprofessor.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}

                }
			?>
</body>

<script src="login-principal.js"></script>
</html>