<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) 
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    } 
    elseif (mysqli_num_rows($result) > 0)
    {
        $usuario = mysqli_fetch_assoc($result);
        $usuario_id = $usuario['id_usuario'];
        $sql_perfil = "SELECT perfil FROM perfil_usuario WHERE id_usuario = $usuario_id";
        $result_perfil = $conexao->query($sql_perfil);

        if ($result_perfil && mysqli_num_rows($result_perfil) > 0) {
            $perfil_usuario = mysqli_fetch_assoc($result_perfil)['perfil'];

            if ($perfil_usuario === "Aprendiz iniciante") {
                header('Location: endividados.php');
            } 
            elseif ($perfil_usuario === "Conhecedor intermediario") {
                header('Location: moderado.php');
            } 
            elseif ($perfil_usuario === "Expert") {
                header('Location: investidor.php');
            }
        } else {
            header('Location: perfil_conexao.php');
        }

        $_SESSION['perfil'] = $perfil_usuario;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        exit; 
    }
} 
else 
{
    header('Location: index.php');
}

/*session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) 
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    } 
    elseif (mysqli_num_rows($result) > 0)
    {
        $usuario = mysqli_fetch_assoc($result);
        $usuario_id = $usuario['id_usuario'];
        $sql_perfil = "SELECT perfil FROM perfil_usuario WHERE id_ usuario = $usuario_id";
        $result_perfil = $conexao->query($sql_perfil);
        $perfil_usuario = mysqli_fetch_assoc($result_perfil)['perfil'];

        if ($perfil_usuario === "Aprendiz iniciante") {
            header('Location: endividados.php');
        } 
        elseif ($perfil_usuario === "Conhecedor intermediario") {
            header('Location: moderado.php');
            exit;
        } 
        elseif ($perfil_usuario === "Expert") {
            header('Location: investidor.php');
            exit;
        }
        elseif (mysqli_num_rows($result_perfil) < 1) {
            header('perfil_user.php');
            exit;
        }

        $_SESSION['perfil'] = $perfil_usuario;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        exit; 
    }
} 
else 
{
    // Não acessa
    header('Location: index.php');
} */
?>