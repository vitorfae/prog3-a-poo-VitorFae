<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        width: 100%;
    }

    button {
        padding: 10px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        background-color: #6c63ff;
        color: white;
        width: 100%;
    }

    button:hover {
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
</head>
<body>
<div><h1>Cadastro de Usuário</h1></div>

<form method="POST" action="processa_cadastro.php"> <!--Chama o método POST para passar os arquivos com segurança-->
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>  <!--Campo para usuário inserir os dados e requer resposta em todos-->
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button> <!--Após tudo estar ok o botão envia para processar_cadastro onde irá validar os dados e registrar o usuário-->>
</form>

</body>
</html>





<!--<form method="POST" action="processa_cadastro.php">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>-->