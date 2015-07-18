<?php include ('conecta.php');
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Loja Virtual</title>
</head>
<body>

<form id="form1" name="form1" method="post" action="">
<table id="tabelaProdutos">
  <tr>
   <td colspan="5" align="center"><p><a href="carrinho.php"><img id="imagemCarrinho" src="imagens/carrinho.jpg" /></a></p></td>
    <td  ><strong>Buscar</strong></td>
    <td><label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" /></td>
    <td id="teste" ><input type="submit" name="aceitar" id="aceitar" value="Buscar" /></td> </form>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td id="cabecalhoLista" colspan="8"><strong>LISTA DE PRODUTOS</strong></td>
    </tr>
     <tr>
    <td><strong>ID</strong></td>
    <td><strong>IMAGEM</strong></td>
    <td><strong>NOME</strong></td>
    <td><strong>DESCRICAO</strong></td>
    <td><strong>PRECO</strong></td>
    <td><strong>QUANTIDADE</strong></td>
    <td><strong>DATA</strong></td>
    <td><strong>ADICIONAR</strong></td>
  </tr>
   
   <?php
   $consulta = mysql_query("SELECT * FROM produtos");
   
   
   if (isset($_POST['buscar'])) {
	$consulta = mysql_query("SELECT * FROM produtos where nome like '%" .$_POST['buscar']."%'");   
	   
   }
   
   while ($linha = mysql_fetch_array($consulta)){
	   	$id = $linha['id'];
		$imagem = $linha['imagem'];
		$nome = $linha['nome'];
		$desc = $linha['descricao'];
		$preco = $linha['preco'];
		$quant = $linha['quantidade'];
		$data = $linha['data'];
   ?>  
  <tr id="produtos">
    <td><?php  echo $id; ?></td>
    <td ><img id="imagemListaProdutos" src="<?php  echo $imagem; ?>"></td>
    <td><?php  echo $nome; ?></td>
    <td><?php  echo $desc; ?></td>
    <td><?php  echo $preco; ?></td>
    <td><?php  echo $quant; ?></td>
    <td><?php  echo $data; ?></td>
    <td>
    <form action="carrinho.php" method="post" name="comprar">
    <input name="id_txt" type="hidden" value="<?php  echo $id; ?>" />
    <input name="nome" type="hidden" value="<?php  echo $nome; ?>" />
    <input name="preco" type="hidden" value="<?php  echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="1"/>
    <input name="Comprar" type="submit" value="Comprar" id="Comprar" />
    </form>
    </td>
  </tr>
<?php
   }
?>
</table>
</form>
</body>
</html>