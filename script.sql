CREATE DATABASE BBDD;

USE BBDD;

CREATE TABLE Person(
	id int primary key auto_increment, 
	firstname varchar(50) not null, 
	lastname varchar(50) not null, 
	address varchar(100) not null, 
	phone varchar(15) not null, 
	email varchar(30) not null
);