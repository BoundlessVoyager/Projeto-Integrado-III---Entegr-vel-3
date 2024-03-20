DROP  DATABASE IF  EXISTS consultorio;
CREATE DATABASE IF NOT EXISTS  consultorio; 

CREATE TABLE consultorio.usuarios(
	idUser INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR (60),
	data_de_nascimento VARCHAR(10),
	genero VARCHAR(9),
	telefone VARCHAR(11),
	email VARCHAR(50) UNIQUE NOT NULL,
	senha VARCHAR (128) NOT NULL
);

CREATE TABLE consultorio.agenda(
	idAgenda INT PRIMARY KEY AUTO_INCREMENT,
	idUser INT(8) NOT NULL,
	medico INT(8) NOT NULL,
	especialidade VARCHAR(30),
	data_da_consulta VARCHAR(10) NOT NULL,
	forma_de_consulta VARCHAR(10) NOT NULL,
	motivo LONGTEXT,
	FOREIGN KEY(idUser) REFERENCES usuarios(idUser)
);
