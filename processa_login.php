<?php

require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

Sessao::iniciar();

$usuario = Autenticador::autenticar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if (isset($_POST['lembrar'])) {
        setcookie('lembrar_email', $email, time() + 3600 * 24 * 30);
    }

    header('Location: dashboard.php');
    exit();
} else {
    echo "Login falhou.";
    echo '<br><a href="login.php"><button>Retornar ao login</button></a>';
}

?>