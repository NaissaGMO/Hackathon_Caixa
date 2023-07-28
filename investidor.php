<?php
include_once('config.php');
session_start();
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
?>
     
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tela_perfis.css">
  </head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <div class="logoimg">
                    <img src="img/logo.jpg">
                </div>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                    <li>
                            <a href="investidor.php"> Meus estudos </a>
                        </li>
                        <li>
                            <a href="moeda2.php"> Invest coins </a>
                        </li>
                        <li>
                            <a href="rede_social2.php"> Invest Book </a>
                        </li>
                        <li>
                            <a href="sair.php" class="inicio">Sair</a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<div class="corpo">
    <div class="titulo">
<h1>Perfil: Expert</h1>
</div>

<div class="mod1">
<h2>Como investir?</h2>
<div class="container">
    
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/euSb3y55v10"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Tipos de investimento</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/yHuNhkntc-I"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Guia para investir em ações</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/18GRtRzOrMM"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Guia para investir em renda rixa</p>
</div>
</div>
</div>

<div class="mod2">
<h2>Módulo 2: Cartão de crédito</h2>
<div class="container">
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/q2p-pc0jyW0"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Como usar o cartão de crédito?</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/9HmUZmCUrxc"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Beneficios do cartão de crédito</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/jrRQL6OAbqo"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Moderação</p>
</div>
</div>
</div>

<div class="mod3">
<h3>Módulo 3: Formas de pagamento</h2>
<div class="container">
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/Mz6eG9eyvmA"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Biometria Facial</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/O9M0qxm-dFw"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Criptomoedas</p>
</div>
<div class="img_content"> 
    <iframe src="https://www.youtube.com/embed/ahPUr771h8w"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Contactless</p>
</div>
</div>
</div>
</div>
</body>
</html>