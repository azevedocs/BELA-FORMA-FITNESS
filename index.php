<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bela Forma Fitness Login</title>
    <link rel="stylesheet" href="./View/css/login-principal.css">
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
                    <a href="index.php"><img class="r-img" src="./View/img/returnn.png" alt=""></a>
                <form action="./Presenter/validar.php" method="post">
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
                        <a href="index.php"><img class="r-img" src="./View/img/returnn.png" alt=""></a>
                    <form action="./Presenter/validar.php" method="post">
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
                        <a href="index.php"><img class="r-img" src="./View/img/returnn.png" alt=""></a>
                    <form action="./Presenter/validar.php" method="post">
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

</body>

<script src="./View/login-principal.js"></script>
</html>