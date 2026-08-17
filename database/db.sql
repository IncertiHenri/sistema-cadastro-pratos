CREATE DATABASE IF NOT EXISTS sistema_pratos;

USE sistema_pratos;

CREATE TABLE usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE prato(
    id_prato INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    nome VARCHAR(50),
    descricao VARCHAR(500),
    preco DECIMAL(10,2),
    categoria VARCHAR(50),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);
