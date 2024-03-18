DROP  DATABASE IF  EXISTS consultorio;
CREATE DATABASE IF NOT EXISTS  consultorio; 
USE consultorio;
CREATE TABLE usuario(
	idUser INT PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR (30) UNIQUE NOT NULL,
	email VARCHAR(50),
	senha VARCHAR (32) NOT NULL,
	img VARCHAR(27) default 'img/l.png',
	pontuacao INT(4) default 0
);
