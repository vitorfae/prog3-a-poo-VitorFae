<form method="POST" action="processa_login.php">
    Email: <input type="email" name="email" value="<?php echo $_COOKIE['lembrar_email'] ?? ''; ?>" required><br>
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar"> Lembrar e-mail</label><br>
    <button type="submit">Entrar</button>
    <a href="cadastro.php"><button type="button" >Cadastre-se</button></a>
</form>
