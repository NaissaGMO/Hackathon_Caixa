<?php
  if(isset($_POST['submit']))
    {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha) 
    VALUES ('$nome','$email','$senha')" );

    $id_usuario = mysqli_insert_id($conexao);
    
    header('Location:bancos.php');

    exit; 
    } 
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icologo.jpg" sizes="500x500">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de usuário</title>
</head>
<body>
  <div class="container">
    <div class="box1">
        <img src="img/logo.jpg" >
    </div>
    <div class="box2">
    <form action="form_usuario.php" method="POST">
      <header>Nova conta</header>
      <br>
      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label for="nome" class="labelinput">Nome completo</label>
      </div>
      <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelinput">Email</label>
      </div>
      <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <label for="senha" class="labelinput">Senha</label>
      </div>
        <br>
        <input type="submit" name="submit" id="submit" value="Criar conta">
        <input type="button" value="Voltar" id="button" onClick="history.go(-1)"> 
    </form>
    </div>
  </div>
</body>
</html>