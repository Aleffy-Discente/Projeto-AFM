<?php

require_once __DIR__ .
    '/../../config/database.php';

class Agenda
{
    private mysqli $conn;

    public function __construct()
    {
        $database = new Database();

        $this->conn =
            $database->connect();
    }

    public function criar(
        int $usuarioId,
        string $titulo,
        string $descricao,
        string $data
    ): bool {

        $sql = "INSERT INTO agendas
        (
            usuario_id,
            titulo,
            descricao,
            data_atividade
        )
        VALUES (?, ?, ?, ?)";

        $stmt =
            $this->conn->prepare($sql);

        $stmt->bind_param(
            "isss",
            $usuarioId,
            $titulo,
            $descricao,
            $data
        );

        return $stmt->execute();
    }

    public function listarPorUsuario(
        int $usuarioId
    ): array {

        $sql = "SELECT *
                FROM agendas
                WHERE usuario_id = ?
                ORDER BY data_atividade";

        $stmt =
            $this->conn->prepare($sql);

        $stmt->bind_param(
            "i",
            $usuarioId
        );

        $stmt->execute();

        return $stmt
            ->get_result()
            ->fetch_all(MYSQLI_ASSOC);
    }

    public function buscarPorId(
        int $id
    ): ?array {

        $sql = "SELECT *
                FROM agendas
                WHERE id = ?";

        $stmt =
            $this->conn->prepare($sql);

        $stmt->bind_param(
            "i",
            $id
        );

        $stmt->execute();

        $result =
            $stmt->get_result();

        return $result
            ->fetch_assoc()
            ?: null;
    }

    public function atualizar(
        int $id,
        string $titulo,
        string $descricao,
        string $data,
        string $status
    ): bool {

        $sql = "UPDATE agendas
                SET
                titulo = ?,
                descricao = ?,
                data_atividade = ?,
                status = ?
                WHERE id = ?";

        $stmt =
            $this->conn->prepare($sql);

        $stmt->bind_param(
            "ssssi",
            $titulo,
            $descricao,
            $data,
            $status,
            $id
        );

        return $stmt->execute();
    }

    public function deletar(
        int $id
    ): bool {

        $sql =
            "DELETE FROM agendas
             WHERE id = ?";

        $stmt =
            $this->conn->prepare($sql);

        $stmt->bind_param(
            "i",
            $id
        );

        return $stmt->execute();
    }
}
