<?php

require_once 'database.php';

class Migration
{
    public static function run()
    {
        $database = new Database();

        $conn = $database->connect();

        $usuarios = " CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT  KEY,
            nome VARCHAR(100) NOT NULL,
            email VARCHAR(150) UNIQUE NOT NULL,
            senha VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $agendas = "CREATE TABLE IF NOT EXISTS agendas(
            id INT AUTO_INCREMENT PRIMARY KEY,
            usuario_id INT NOT NULL,
            titulo VARCHAR(120) NOT NULL,
            descricao TEXT,
            data_atividade DATE NOT NULL, status ENUM(
                'pendente',
                'fazendo',
                'concluido'
            ) DEFAULT 'pendente',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, CONSTRAINT
            fk_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
        )

        ";

        $conn->query(
            $usuarios
        );

        $conn->query(
            $agendas
        );
    }
}
