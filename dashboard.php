<?php
require_once 'classes/Usuario.php';  // <--- IMPORTANTE: isso vem antes do Sessao::get
require_once 'classes/Sessao.php';

Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit();
}

echo "<h1>Bem-vindo, " . htmlspecialchars($usuario->getNome()) . "!</h1>";
if (isset($_COOKIE['lembrar_email'])) {
    echo "<p>Seu e-mail lembrado: " . htmlspecialchars($_COOKIE['lembrar_email']) . "</p>";
}
echo '<a href="logout.php"><button>Logout</button></a>';

?>