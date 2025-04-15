<?php

class Sessao {
    public static function iniciar() { //verifica se já foi iniciada uma sessão
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public static function set(string $chave, $valor) { //Salvando valores de usuario na sessão
        $_SESSION[$chave] = $valor;
    }

    public static function get(string $chave) {
        return $_SESSION[$chave] ?? null; // caso não exista sessão retorna null
    }

    public static function destruir() {
        session_start();
        session_destroy(); //termina a sessão
    }
}

?>