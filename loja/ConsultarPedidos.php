<?php include ('conecta.php'); ?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Pedidos</title>
</head>
<body>
<form name="form1" method="post" action="ListarItensPedido.php">
  <label>Numero do Pedido
    <input name="id" type="text" id="textfield">
  </label>
  <input type="submit" name="Consultar" id="Consultar" value="Consultar">
</form>
<table id="tabelaPedidos">
  <tr>
    <td id="cabecalhoLista" colspan="8"><strong>LISTA DE PEDIDOS</strong></td>
</tr>
     <tr>
    <td><strong>Numero Pedido</strong></td>
    <td><strong>Valor Total</strong></td>
    <td><strong>Data</strong></td>
  </tr>
<?php
session_start();
   $consulta = mysql_query("SELECT * FROM pedidos p where p.idCliente = ".$_SESSION['minhasessao'] ['id']);
   
   while ($linha = mysql_fetch_array($consulta)){
	   	$idPedido = $linha['id'];
		$valorTotal = $linha['valorTotal'];
		$data = $linha['data'];
   ?>  
  <tr>
    <td><?php  echo $idPedido; ?></td>
    <td><?php  echo $valorTotal; ?></td>
    <td><?php  echo $data; ?></td>
  </tr>
  <?php
   }
?>
</table>
<h1><a href="Usuario.php">Voltar ao Menu do Usuario</a></h1>
</body>

</html>
