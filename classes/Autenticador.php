<?php

require_once 'Usuario.php'; //importando classe usuário que será utilizada

class Autenticador { //Início da classe
    private static string $arquivo = 'dados.php';

    public static function registrar(Usuario $usuario): void {
        $dados = include self::$arquivo;
        $dados['usuarios'][$usuario->getEmail()] = serialize($usuario);
        file_put_contents(self::$arquivo, '<?php return ' . var_export($dados, true) . ';');
    }

    public static function autenticar(string $email, string $senha): ?Usuario {
        $dados = include self::$arquivo;
        if (isset($dados['usuarios'][$email])) {
            $usuario = unserialize($dados['usuarios'][$email]);
            if ($usuario instanceof Usuario && $usuario->autenticar($senha)) {
                return $usuario;
            }
        }
        return null;
    }
}

?>