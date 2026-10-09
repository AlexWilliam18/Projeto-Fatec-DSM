-- Active: 1791505784343@@127.0.0.1@3306@mysql
CREATE DATABASE portal CHARACTER SET utf8mb4;

USE portal;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil VARCHAR(20) NOT NULL DEFAULT 'usuario' -- Opções: admin ou usuario - conforme determinado no primeiro_usuario.php, quando for criado o primeiro usuario, ele vai ser admin
);


------------------------------------------------------------------------------------------------------------------------------------------------------------
-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Presta atenção !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

------------------------ RODE OS COMANDOS ABAIXO APENAS SE PRECISAR TRASNFORMAR UM USUÁRIO QUE JÁ EXISTIA EM ADMIN -------------------------------------------

USE portal;

ALTER TABLE usuarios ADD perfil VARCHAR(20) NOT NULL DEFAULT 'usuario';

-- Promove o primeiro usuario a administrador (ajuste o id se necessario).
UPDATE usuarios SET perfil = 'admin' WHERE id = 1;