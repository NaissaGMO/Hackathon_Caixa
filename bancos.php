<?php
    /*include_once('config.php');
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: form_usuario.php');
    } */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open finance</title>
  <link rel="stylesheet" href="./css/bancos.css">
  <link rel="icon" href="img/icologo.jpg">
</head>

<body>
<div class="modal-bancos-credenciados show-modal">
	<div class="modal-content">
		<h3>Bancos Credenciados</h3>
		<div class="item-accreditation-ways">
			<img src="img/brb_logo.png">
			<a href="https://brbbanknet.brb.com.br/netbanking/">
				Banco de Brasília</a>
		</div>
		<div class="item-accreditation-ways">
			<img src="img/bradesco_logo.png">
			<a tabindex="2" href="https://www.ne12.bradesconetempresa.b.br/ibpjlogin/login.jsf">
				Bradesco</a>
		</div>
	<div class="item-accreditation-ways">
			<img src="img/cef_logo.png">
			<a tabindex="3" href="https://internetbanking.caixa.gov.br/sinbc/#!nb/login">
				Caixa Econômica</a>
		</div>
		<div class="item-accreditation-ways">
				<img src="img/bb_logo.png" >
				<a tabindex="2" href=https://www2.bancobrasil.com.br/aapf/login.html?1649961209864&_ga=2.92741150.2036215357.1680873600-1520411842.1680873600&_gac=1.24960712.1680921741.Cj0KCQjw_r6hBhDdARIsAMIDhV_ysamRwNvWIsn3OXeL70cnVylI3GGL0QYmU9n4JE1a8hY59FKK3ycaAu4vEALw_wcB#/acesso-aapf-agencia-conta>
					Banco do Brasil</a>
			</div>
		<div class="item-accreditation-ways">
				<img src="img/banrisul_logo.png">
				<a tabindex="2" href="index.php">
					Banrisul</a>
			</div>
		
		<div class="item-accreditation-ways">
				<img src="img/sicoob_logo.png">
				<a href="index.php">
					Sicoob</a>
			</div>
		<div class="item-accreditation-ways">
				<img src="img/santander_logo.png">
				<a href="index.php">
					Santander</a>
			</div>
		<div class="item-accreditation-ways">
				<img src="img/itau_logo.png">
				<a href="index.php">
					Itaú</a>
			</div>
		<div class="item-accreditation-ways">
				<img src="img/agibank_logo.png">
				<a href="index.php">
					Agibank</a>
			</div>
		<div class="item-accreditation-ways">
				<img src="img/sicredi_logo.png">
				<a href="index.php">
					Sicredi</a>
			</div>
		<hr>
		<div class="button-panel">
			<a class="botao" href="index.php">Entrar sem conta bancaria</a>
		</div>
	</div>
</div>

</body>
</html>