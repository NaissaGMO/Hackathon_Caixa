<?php
if(isset($_POST['submit']))
{
  include_once('config.php');
  require_once('perfil_conexao.php');

  $id_usuario = $fk['id_usuario'];
  $idade = $_POST['idade'];
  $renda = $_POST['renda'];
  $divida = $_POST['divida'];
  $financas = $_POST['financas'];
  $investimento = $_POST['investimento'];
  $risco = $_POST['risco'];
  $conhecimento = $_POST['conhecimento'];

  $insert = mysqli_query($conexao, "INSERT INTO perfil_usuario(id_usuario, faixa_etaria, renda, divida, gerenciamento, experiencia, risco, conhecimento) 
  VALUES ('$id_usuario','$idade','$renda','$divida','$financas','$investimento','$risco','$conhecimento')");

  if ($soma <= 7) {
    $perfil = "Aprendiz iniciante";
  } 
  elseif ($soma >= 8 && $soma <= 14) {
    $perfil = "Conhecedor intermediário";
  } 
  elseif ($soma >= 15 && $soma <= 21) {
    $perfil = "Expert";
  }

$sql_inserir_perfil = "UPDATE perfil_usuario SET perfil = '$perfil' WHERE id_usuario=$id_usuario";
$conexao->query($sql_inserir_perfil);

  header('Location: sair.php');
} 
?> 

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icologo.jpg" sizes="500x500">
    <link rel="stylesheet" href= "css/perfil.css">
     <title>Formulario de perfil</title>
</head>
<body>
    <div class="box">
    <form action="perfil_user.php" method="POST">

    <fieldset>
      <legend> <b> Formulario de analise de perfil </b> </legend>
        <br>

      <div class="inputBox">
          <p>Qual é a sua faixa etária?</p>
          <label for="opcao1">
            <input type="radio" id="opcao1" name="idade" value="1"> 18-21 anos
          </label><br>
          <label for="opcao2">
            <input type="radio" id="opcao2" name="idade" value="2"> 22-25 anos
          </label><br>
          <label for="opcao3">
            <input type="radio" id="opcao3" name="idade" value="3"> 26-29 anos
          </label><br>
      </div>

      <div class="inputBox">
        <p>Qual é a sua renda mensal?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="renda" value="1"> Menos de R$ 1.320,00
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="renda" value="2"> R$ 1.321,00 - R$ 2.737,00
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="renda" value="3"> Mais de R$ 2.500,00
        </label><br>
      </div>

      <div class="inputBox">
        <p>Você tem alguma dívida?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="divida" value="2"> Sim, divida de financeiro (carro ou imóvel)
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="divida" value="1"> Sim, dividas de cheque especial, cartão de crédito ou empréstimo
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="divida" value="3"> Não tenho dividas
        </label><br>
      </div>

      <div class="inputBox">
        <p>Como você costuma gerenciar seu dinheiro?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="financas" value="1"> Gasto todo meu dinheiro e não economizo nada
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="financas" value="2"> Economizo um pouco, mas não tenho um plano financeiro específico
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="financas" value="3"> Tenho um plano financeiro bem estruturado que inclui economias, investimentos e metas financeiras específicas
        </label><br>
      </div>

      <div class="inputBox">
        <p>Qual é a sua experiência em investimentos financeiros?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="investimento" value="1"> Nenhuma experiência
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="investimento" value="2"> Alguma experiência, investimentos basicos ou moderados
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="investimento" value="3"> Experiência significativa, investimentos avançados
        </label><br>
      </div>

      <div class="inputBox">
        <p>Como você se sente em relação ao risco financeiro?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="risco" value="1"> Não gosto de correr riscos e evito investimentos arriscados
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="risco" value="2"> Não me importo de assumir riscos moderados em investimentos que têm um potencial de retorno significativo
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="risco" value="3"> Sou muito confortável com riscos financeiros e investimentos agressivos
        </label><br>
</div>

      <div class="inputBox">
        <p>Qual é o seu conhecimento sobre finanças pessoais?</p>
        <label for="opcao1">
          <input type="radio" id="opcao1" name="conhecimento" value="1"> Não tenho conhecimento sobre finanças pessoais
        </label><br>
        <label for="opcao2">
          <input type="radio" id="opcao2" name="conhecimento" value="2"> Tenho um conhecimento razoável sobre finanças pessoais
        </label><br>
        <label for="opcao3">
          <input type="radio" id="opcao3" name="conhecimento" value="3"> Tenho um conhecimento avançado sobre finanças pessoais e investimentos
        </label><br>
      </div>
      <br>
      <input type="submit" name="submit" id="submit" value="Enviar">
      </fieldset>
      </form>
      </div>
</body>