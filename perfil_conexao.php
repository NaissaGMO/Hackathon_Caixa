<?php 
session_start();
include_once('config.php');
if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: index.php');
}

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$sql_id = mysqli_query($conexao, "select id_usuario from usuarios where email = '$email' and senha = '$senha'");
$fk = mysqli_fetch_assoc($sql_id);
$id_usuario = $fk['id_usuario']; 
?>

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
            <div class="form">
            <h1> Pedimos a sua compreensão, </h1>
            <p> 
                A nossa plataforma, a Jovem Invest, oferece educação financeira de forma personalizada.
                A nossa personalização é definida de acordo com o perfil dos nossos usuários, portanto é
                necessário que você responda o nosso formulário de definição de perfil. Aviso: ao terminar de 
                responder o formulário, será necessário refazer o login (escrever seu email e sua senha para
                entrar na aplicação.)
            </p>
            <h2> Agradecemos a sua colaboração,</h2>
            <h3> Equipe da Jovem Invest. </h3>
            <a href="perfil_user.php">Clique aqui para responda ao formulário de definição de perfil.</a>
            </div>
        </div>
    </div>
</body>
</html>