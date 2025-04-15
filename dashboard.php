<?php
require_once 'classes/Usuario.php';
require_once 'classes/Sessao.php'; //importando arquivos necessários para a operação

// iniciando a sessão, caso ainda não tenha sido iniciada
Sessao::iniciar();
$usuario = Sessao::get('usuario');

//verificando se a várivael está vazia ou falsa, caso sim ele retona na tela de login
if (!$usuario) {
    header('Location: login.php');
    exit();
}

// caso tenha algo na váriavel irá rodar o HTML e CSS abaixo:
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #83a4d4, #b6fbff);
            height: 100vh;
            display: flex;
            flex-direction: column;
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
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            background-color: #4facfe;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #00c6ff;
        }

        @media (max-width: 500px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bem-vindo, <?= htmlspecialchars($usuario->getNome()) ?>!</h1>

        <?php if (isset($_COOKIE['lembrar_email'])): ?>
            <p>Seu e-mail lembrado: <?= htmlspecialchars($_COOKIE['lembrar_email']) ?></p>
        <?php endif; ?>

        <a href="logout.php"><button>Logout</button></a>
    </div>

</body>
</html>