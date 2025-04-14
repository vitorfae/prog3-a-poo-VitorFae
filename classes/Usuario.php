<?php

class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    public function __construct(string $nome, string $email, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function autenticar(string $senha): bool {
        return password_verify($senha, $this->senha);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

?>