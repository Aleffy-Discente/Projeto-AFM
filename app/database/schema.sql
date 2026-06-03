CREATE DATABASE IF NOT EXISTS afm;
USE afm;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE agendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    titulo VARCHAR(120) NOT NULL,
    descricao TEXT,
    data_atividade DATE NOT NULL,
    status ENUM(
        'pendente',
        'fazendo',
        'concluido'
    ) DEFAULT 'pendente',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_usuario
    FOREIGN KEY(usuario_id)
    REFERENCES usuarios(id)
    ON DELETE CASCADE
);