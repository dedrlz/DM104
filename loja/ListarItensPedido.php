<?php include ('conecta.php'); 
$idPedido = $_POST['id'];
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Loja Virtual</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
<table id="tabelaPedidos">
  <tr>
    <td id="cabecalhoLista" colspan="8"><strong>Itens do Pedido <?php echo $idPedido ?></strong></td>
</tr>
     <tr>
    <td><strong>IDProduto</strong></td>
    <td><strong>Imagem</strong></td>
    <td><strong>Nome</strong></td>
    <td><strong>Descricao</strong></td>
    <td><strong>Preco</strong></td>
    <td><strong>Quantidade</strong></td>
  </tr>
<?php
   $consulta = mysql_query("SELECT *,i.quantidade FROM itenspedido i INNER JOIN produtos p where i.idProduto = p.id AND i.idPedido = ".$idPedido);
   
   	 if (mysql_num_rows($consulta) == 0)
	 	{ ?>
        	<H1>Pedido Inexistente </H1>
            <br> <br>
			<meta http-equiv="refresh" content="1; url = ConsultarPedidos.php">
            <?php }

   while ($linha = mysql_fetch_array($consulta)){
	   	$idProduto = $linha['idProduto'];
		$imagem = $linha['imagem'];
		$nome = $linha['nome'];
		$descricao = $linha['descricao'];
		$preco = $linha['preco'];
		$quantidade = $linha['quantidade'];
   ?>  
  <tr id="produtos">
    <td><?php  echo $idProduto; ?></td>
    <td ><img id="imagemListaProdutos" src="<?php  echo $imagem; ?>"></td>
    <td><?php  echo $nome; ?></td>
    <td><?php  echo $descricao; ?></td>
    <td><?php  echo $preco; ?></td>
    <td><?php  echo $quantidade; ?></td>
  </tr>
    <?php
   }
?>
</table>
</form>
</body>
  <h1><a href="ConsultarPedidos.php"><strong>Voltar a Consulta de Pedidos</strong></a></h1>
</html>