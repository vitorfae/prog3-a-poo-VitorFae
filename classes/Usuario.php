<?php
//criação da classe de usuário com atributos privados
class Usuario {
    private string $nome;
    private string $email;
    private string $senha;

    // função de contrutor, chamada quando é criado um usuário e criptografa a senha com password_hash()
    public function __construct(string $nome, string $email, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    //metodo de autenticar a senha  se está correta
    public function autenticar(string $senha): bool {
        return password_verify($senha, $this->senha);
    }

    //nos gets são os metodos que retornam o nome e o email do usuário
    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

?>