	DROP DATABASE IF EXISTS Bubble;

	CREATE DATABASE Bubble;

	CREATE TABLE usuarios(
		cod_usuarios 		int(5)		    AUTO_INCREMENT NOT null,
		nome_usuarios		varchar(100)	DEFAULT NULL,
		login_usuarios		varchar(100)	DEFAULT NULL,
		senha_usuarios		varchar(100)	DEFAULT NULL,
		nivel_usuarios		char(1)			NOT null,
		PRIMARY KEY (cod_usuarios)
		);
		
	INSERT INTO usuarios (nome_usuarios, login_usuarios, senha_usuarios, nivel_usuarios)
			VALUES ('João Vitor da Silva Frez', 'Zhousi', 'PW1', 1);
			
	CREATE TABLE avaliacao(
		ava_codigo		int(5)              	AUTO_INCREMENT NOT null,
		ava_descricao	varchar(30)				NOT null,
		user_login		varchar(100)			DEFAULT NULL,
		user_codigo		int(5)					NOT null,
		PRIMARY KEY(ava_codigo)
		);
		
	CREATE TABLE produtos(
		pro_codigo		int(10)					AUTO_INCREMENT NOT NULL,
		pro_nome		varchar(100)			NOT null,
		pro_descricao	varchar(100)			NOT null,
		pro_imagem		varchar(100) 			NOT null,
		pro_tipo		int(1)					NOT null,
		PRIMARY KEY(pro_codigo)
		);
		
