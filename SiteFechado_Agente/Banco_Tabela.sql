CREATE DATABASE focoNaDengue;

USE focoNaDengue;

CREATE TABLE dados_reporte (
	Id                  INT             PRIMARY KEY AUTO_INCREMENT,
    Bairro              VARCHAR(200)    NOT NULL,
    Endereco            VARCHAR(200)    NOT NULL
);

CREATE TABLE usuarios (
    Id                  INT             PRIMARY KEY AUTO_INCREMENT,
    CPF                 VARCHAR(11)     NOT NULL UNIQUE,
    Data_aniversario    DATE            NOT NULL,
    Senha               VARCHAR(200)    NOT NULL
);

INSERT INTO usuarios (CPF, Data_aniversario, Senha) 
VALUES ("12345678901", '2004-04-09', "123456789")