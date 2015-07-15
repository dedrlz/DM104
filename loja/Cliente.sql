CREATE TABLE usuarios(
id int NOT NULL AUTO_INCREMENT,
nome varchar(30) null,
usuario varchar(30),
pass varchar (30),
permissoes int(1),
imagem varchar (100) null,
data date null,
primary key(id)
);

INSERT INTO `loja`.`usuarios` (`id`, `nome`, `usuario`, `pass`, `permissoes`, `imagem`, `data`) VALUES (NULL, 'Luiz Felipe Pereira', 'luiz', '123', '1', NULL, '2015-07-01');
INSERT INTO `loja`.`usuarios` (`id`, `nome`, `usuario`, `pass`, `permissoes`, `imagem`, `data`) VALUES (NULL, 'teste', 'teste', '123', '2', NULL, '2015-07-01');