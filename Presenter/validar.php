<?php
    /*primeiro login*/

				/* Declaração de Variáveis */
				$userg = @$_POST['nome1'];
				$passg = @$_POST['senha1'];
				$submitg = @$_POST['submit1'];
				
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
							
						}
					}

                }
			?>