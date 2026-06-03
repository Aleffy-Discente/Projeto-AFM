<?php

require_once __DIR__ . '../config/database.php';

class Usuario
{
    private mysqli $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function findByEmail(string $email): ?array
    {
        $sql = "SELECT * FROM usuarios
                WHERE email = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc() ?: null;
    }

    public function create(
        string $nome,
        string $email,
        string $senha
    ): bool {

        $senhaHash = password_hash(
            $senha,
            PASSWORD_DEFAULT
        );

        $sql = "INSERT INTO usuarios
                (nome, email, senha)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "sss",
            $nome,
            $email,
            $senhaHash
        );

        return $stmt->execute();
    }
}
