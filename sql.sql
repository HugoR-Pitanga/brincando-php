CREATE DATABASE estoque;

CREATE TABLE Usuario (
    Idusuario int NOT NULL AUTO_INCREMENT,
    Usuario varchar(255) NOT NULL,
    Senha varchar(800) NOT NULL,
    primary key (Idusuario)
);