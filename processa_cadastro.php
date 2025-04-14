<?php

require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

$nome = htmlspecialchars(trim($_POST['nome']));
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

if ($nome && $email && $senha) {
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar($usuario);
    header('Location: login.php');
    exit();
} else {
    echo "Dados inválidos.";
}

?>