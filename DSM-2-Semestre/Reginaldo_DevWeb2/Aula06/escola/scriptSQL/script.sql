CREATE DATABASE escola;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    curso VARCHAR(100) NOT NULL
);

INSERT INTO alunos (nome, email, curso) VALUES
('Ana Silva', 'ana@email.com', 'DSM'),
('Carlos Souza', 'carlos@email.com', 'ADS'),
('Mariana Santos', 'mariana@email.com', 'DSM');