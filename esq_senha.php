<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Recuperação de senha</title>
</head>
<body>
  <div class="container">
    <div class="box1">
        <img src="img/logo.jpg" >
    </div>
    <div class="box2">
    <form action="index.html" method="POST">
      <header>Esqueci minha senha</header>
      <p>Informe abaixo o e-mail utilizado no cadastro de sua conta.</p>
      <br>
      <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelinput">Email</label>
      </div>
        <br>
        <input type="submit" name="submit" id="submit" value="Enviar"  onclick="">
        <input type="button" value="Voltar" id="button" onClick="history.go(-1)"> 
    </form>
    </div>
  </div>
</body>
</html>