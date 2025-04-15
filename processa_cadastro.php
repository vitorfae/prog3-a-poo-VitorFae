<?php
// importando classes que serão utilizadas no processo de validação do cadastro
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

$nome = htmlspecialchars(trim($_POST['nome'])); //campo nome removendo espaços e usando htmlspecialchars que assegura contra ataques usando javascript
$email = (trim($_POST['email'])); //pega os valores de email removendo espaços caso tenha
$senha = $_POST['senha']; // pega senha crua, pois será tratada dentro da classe 

if ($nome && $email && $senha) { //if valida se todos os dados foram passados corretamente
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrar($usuario); //chamada do método registrar da classe autenticador onde ira ser processado
    header('Location: login.php');
    exit();
} else {
    echo "Dados inválidos.";
}

?>