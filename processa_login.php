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
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login Falhou</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(to right, #83a4d4, #b6fbff);
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .container {
                background-color: #ffffffee;
                padding: 30px 40px;
                border-radius: 12px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                max-width: 400px;
                width: 100%;
                text-align: center;
            }

            h1 {
                color: #d9534f;
                margin-bottom: 15px;
            }

            p {
                color: #555;
                margin-bottom: 20px;
            }

            button {
                padding: 10px;
                border: none;
                border-radius: 6px;
                background-color: #6c63ff;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                width: 100%;
            }

            button:hover {
                background-color: #5a54e5;
            }

            @media (max-width: 500px) {
                .container {
                    padding: 20px;
                }

                h1 {
                    font-size: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Login falhou</h1>
            <p>Email ou senha incorretos. Tente novamente.</p>
            <a href="login.php"><button>Retornar ao login</button></a>
        </div>
    </body>
    </html>
    <?php
}
?>
