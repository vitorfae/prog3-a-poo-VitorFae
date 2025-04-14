<?php

class Sessao {
    public static function iniciar() {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    public static function set(string $chave, $valor) {
        $_SESSION[$chave] = $valor;
    }

    public static function get(string $chave) {
        return $_SESSION[$chave] ?? null;
    }

    public static function destruir() {
        session_start();
        session_destroy();
    }
}

?>