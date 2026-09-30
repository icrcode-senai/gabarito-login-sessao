create database sistema_login;

use sistema_login;

create table usuarios (
    id int auto_increment primary key,
    email varchar(255) not null unique,
    senha varchar(255) not null unique,
    cargo enum('adm','comum') not null
);

insert into usuarios (email, senha, cargo) values ('icaro@teste.com','1234','adm');