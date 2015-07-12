CREATE TABLE usuarios(
int id NOT NULL AUTO_INCREMENT,
nome varchar(30) null,
usuario varchar(30),
pass varchar (30),
permissoes int(1),
imagem varchar (100) null,
data date null,
primary key(id)
);