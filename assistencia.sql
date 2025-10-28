-- Cria o banco de dados
CREATE DATABASE IF NOT EXISTS assistencia;
USE assistencia;

-- Cria a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL
);

-- Insere um usuário administrador com senha criptografada
INSERT INTO usuarios (email, senha)
VALUES ('comicsultimate@gmail.com', MD5('tony2506'));