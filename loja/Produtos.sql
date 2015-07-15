CREATE TABLE produtos (
id INT NOT NULL AUTO_INCREMENT,
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