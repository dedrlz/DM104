// Por Favor criar a Base de Dados "loja" antes de executar os Comandos


CREATE TABLE produtos (
id int NOT NULL AUTO_INCREMENT,
imagem varchar (30) null,
nome varchar (30) null,
descricao varchar (30) null,
preco varchar (30) null,
quantidade varchar (30) null,
data date null,
primary key(id)
);

INSERT INTO `loja`.`produtos` (`id`, `imagem`, `nome`, `descricao`, `preco`, `quantidade`, `data`) VALUES (NULL, 'imagens/01.jpg', 'Celular', 'Apple 5', '300', '5', '2015-07-16');
INSERT INTO `loja`.`produtos` (`id`, `imagem`, `nome`, `descricao`, `preco`, `quantidade`, `data`) VALUES (NULL, 'imagens/02.jpg', 'Camera', 'Camera Sony', '200', '2', '2015-07-16');
INSERT INTO `loja`.`produtos` (`id`, `imagem`, `nome`, `descricao`, `preco`, `quantidade`, `data`) VALUES (NULL, 'imagens/03.jpg', 'Televisao', 'LG', '100', '1', '2015-07-16');

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

CREATE TABLE pedidos(
id int NOT NULL AUTO_INCREMENT,
idCliente int,
valorTotal real,
data date null,
primary key(id),
FOREIGN KEY (idCliente) REFERENCES usuarios (id)
);

create table itenspedido ( 
id int not null auto_increment,
idProduto int,
idPedido int,
quantidade int,
primary key (id),
FOREIGN KEY (idProduto) REFERENCES produtos (id),
FOREIGN KEY (idPedido) REFERENCES pedidos (id)
);