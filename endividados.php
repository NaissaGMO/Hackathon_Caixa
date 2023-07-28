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
                        <a href="endividados.php"> Meus estudos </a>
                    </li>
                    <li>
                        <a href="moeda1.php"> Invest coins </a>
                    </li>
                    <li>
                        <a href="rede_social1.php"> Invest Book </a>
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
<h1>Perfil: Aprendiz Iniciante</h1>
</div>

<div class="mod1">
    <h2>Módulo 1: Como organizar minha vida financeira</h2>
    <div class="container">
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/17nf82Gag3Y"
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Organizando as finanças</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/8zj0GJKTWwE"
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Sainda das dívidas</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/u-ohv2XchFs" 
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Planeje-se</p>
        </div>
    </div>
</div>

<div class="mod2">
    <h2>Módulo 2: Métodos de pagamento</h2>
    <div class="container">
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/sOt733SirUU"
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Cartão de crédito e débito</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/P6JQat1pwSc"
                frameborder="0" width="360" height="200">
            </iframe>
            <p>O que é pix?</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/Bed2iv04awE" 
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Tipos de pagamento com pix</p>
        </div>
    </div>
</div>

<div class="mod3">
    <h2>Módulo 3: A importância de poupar</h2>
    <div class="container">
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/Z3bHq7xeUY0"
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Porque economizar?</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/_WBzvJsjAgE" 
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Poupar é para o futuro</p>
        </div>
        <div class="img_content"> 
            <iframe src="https://www.youtube.com/embed/mh8lYdrIA1w" 
                frameborder="0" width="360" height="200">
            </iframe>
            <p>Tenha uma reserva financeira</p>
        </div>
    </div>
</div>
</body>
</html>