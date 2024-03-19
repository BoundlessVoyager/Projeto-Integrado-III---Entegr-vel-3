DROP  DATABASE IF  EXISTS consultorio;
CREATE DATABASE IF NOT EXISTS  consultorio; 

CREATE TABLE consultorio.usuarios(
	idUser INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR (60),
	data_de_nascimento DATE,
	genero VARCHAR(1),
	telefone INT(11),
	email VARCHAR(50) UNIQUE NOT NULL,
	senha VARCHAR (128) NOT NULL
);
CREATE TABLE consultorio.medicos(
	idMedico INT PRIMARY KEY AUTO_INCREMENT,
	medico VARCHAR(60),
	especialidade VARCHAR(40)
);
CREATE TABLE consultorio.agenda(
	idAgenda INT PRIMARY KEY AUTO_INCREMENT,
	idUser INT(8) NOT NULL,
	idMedico INT(8) NOT NULL,
	data_de_consulta VARCHAR(10) NOT NULL,
	forma_de_consulta VARCHAR(10) NOT NULL,
	motivo LONGTEXT,
	FOREIGN KEY(idUser) REFERENCES usuarios(idUser),
	FOREIGN KEY(idMedico) REFERENCES medicos(idMedico)
);
