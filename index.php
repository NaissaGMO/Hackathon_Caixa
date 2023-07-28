<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="img/icologo.jpg" sizes="500x500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box1">
            <img src="img/logo.jpg" >
        </div>
        <div class="box2">
            <div class="links">
            <a href="esq_senha.php">Esqueci minha senha</a>
            <a href="form_usuario.php">Criar conta</a>
            </div>
            <div class="form">
            <form action="log-conexao.php" method="POST">
                <header>Login</header>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                  <input id="submit" type="submit" name="submit" value="Entrar">
              </form>
            </div>
        </div>
    </div>
</body>
</html>