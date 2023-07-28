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
                            <a href="moderado.php"> Meus estudos </a>
                        </li>
                        <li>
                            <a href="moeda3.php"> Invest coins </a>
                        </li>
                        <li>
                            <a href="rede_social3.php"> Invest Book </a>
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
            <h1>Perfil: Conhecedor intermediário</h1>
        </div>

<div class="mod1">
<h2>Módulo 1: A importancia de investir</h2>
<div class="container">
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/SvA0EE_jJFc"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Porque investir?</p>
</div>
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/rpEABwSXzvE"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Como me livrar de gastos superfluos</p>
</div>
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/0bKDBDq54ec"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Investir tras segurança para o futuro</p>
</div>
</div>
</div>

<div class="mod2">
<h2>Módulo 2: cartão</h2>
<div class="container">
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/1ZxGvwjQ3-w"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Como escolher o melhor cartão?</p>
</div>
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/NiZzOrsq0kU"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Controle gastos no cartão de crédito</p>
</div>

<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/5Dxrcl79PVk"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Bloqueio temporário do cartão</p>
</div>
</div>
</div>

<div class="mod3">
<h3>Módulo 3: Como ganhar mais dinheiro</h2>
<div class="container">
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/cGaZbjhPQwk"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Renda extra</p>
</div>
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/O7cO6KT6Ass"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Negocio paralelo</p>
</div>
<div class="img_content"> 
<iframe src="https://www.youtube.com/embed/IazEN13o304"
        frameborder="0" width="360" height="200">
    </iframe>
    <p>Renda passiva</p>
</div>
</div>
</div>
</div>
</body>
</html>