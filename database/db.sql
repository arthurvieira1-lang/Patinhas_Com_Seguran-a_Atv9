CREATE DATABASE au_migos;

USE au_migos;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE animal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    id_cliente INT,
    CONSTRAINT fk_dono_animal
    FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente)
);