<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    h1 {
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 1px 1px 2px #555;
    }

    form {
        background-color: #ffffffee;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="email"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        width: 100%;
    }

    label {
        font-size: 14px;
        color: #333;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .btn-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    button,
    .btn-group a button {
        padding: 10px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    button[type="submit"] {
        background-color: #4facfe;
        color: white;
    }

    button[type="submit"]:hover {
        background-color: #00c6ff;
    }

    .btn-group a button {
        background-color: #6c63ff;
        color: white;
    }

    .btn-group a button:hover {
        background-color: #5a54e5;
    }

    @media (max-width: 500px) {
        form {
            padding: 20px;
        }

        h1 {
            font-size: 22px;
        }
    }
</style>

    </style>
</head>
<body>
<div><h1>Página de Login</h1></div>

<form method="POST" action="processa_login.php"> <!--Chama o método POST para passar os arquivos com segurança-->
    Email: <input type="email" name="email" value="<?php echo $_COOKIE['lembrar_email'] ?? ''; ?>" required><br> <!--Caso o botão de lembrar email estiver marcado ele vai lembrar, senão vai passar a string vazia-->
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar"> Lembrar e-mail</label><br>

    <div class="btn-group">
        <button type="submit">Entrar</button>
        <a href="cadastro.php"><button type="button">Cadastre-se</button></a>
    </div>
</form>

</body>
</html>