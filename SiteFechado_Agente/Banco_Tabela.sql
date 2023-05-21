CREATE DATABASE focoNaDengue;

USE focoNaDengue;

CREATE TABLE dados_reporte (
	Id                  INT             PRIMARY KEY AUTO_INCREMENT,
    CPF_reporte         VARCHAR(11)     NOT NULL,
    Bairro              VARCHAR(200)    NOT NULL,
    Rua                 VARCHAR(200)    NOT NULL
);

CREATE TABLE usuarios (
    Id                  INT             PRIMARY KEY AUTO_INCREMENT,
    CPF                 VARCHAR(11)     NOT NULL UNIQUE,
    Data_aniversario    DATE            NOT NULL,
    Senha               VARCHAR(200)    NOT NULL
);

INSERT INTO usuarios (CPF, Data_aniversario, Senha) 
VALUES ("12345678901", '2004-04-09', "123456789");

INSERT INTO usuarios (CPF, Data_aniversario, Senha) 
VALUES ("11122233344", '2004-04-09', "123");