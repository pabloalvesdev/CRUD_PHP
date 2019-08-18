create database cadastro;
use cadastro;
create table cadastro(
id int primary key auto_increment,
nome varchar(50),
sobrenome varchar(100),
email varchar(100),
nacionalidade varchar(30),
descricao text
);