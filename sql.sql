create database crudoperation;
use crudoperation;
create table crud (
	id int primary key auto_increment,
    name varchar(50),
    email varchar(50),
    mobile varchar(20),
    password varchar(15)
);