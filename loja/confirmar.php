<?php include ('conecta.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmar Pedido</title>
</head>

<body>
<h1>Confirmação do Pedido</h1>
</body>
</html>

<?php
session_start();
$total = $_POST['total'];
$data = date('Y/m/d');

if (!empty($_SESSION['minhasessao'] ['nome']))
{ 
	 $sql = mysql_query ("SELECT * FROM pedidos");
	 
	 if (mysql_num_rows($sql) == 0)
	 	$proximoID = 1;
	 else
	 	{
		  while ($linha = mysql_fetch_array($sql))
		  $proximoID = $linha['id']+1;		
		}
	 $idUsuario = $_SESSION['minhasessao'] ['id'];	
	 mysql_query("INSERT INTO pedidos(id, idCliente, valorTotal, data) VALUES ('$proximoID','$idUsuario','$total','$data')");
	 
   for ($i=0; $i < count($_SESSION['carrinho']) ; $i++) { 
       $idProduto = $_SESSION['carrinho'][$i]['id'];
	   $quantidade = $_SESSION['carrinho'][$i]['quantidade'];
	   mysql_query ("INSERT INTO itenspedido(idProduto, idPedido, quantidade) VALUES ('$idProduto','$proximoID','$quantidade')");
   }
?>
    <html>
	<head>
   	<H1>Pedido Realizado Com Sucesso !!</H1>
    <meta http-equiv="refresh" content="3; url = produtos.php">  
	</head>
	</html>
 <?php }
else
	{ 
		?>
    <html>
	<head>
    <h2>Atenção para Efetuar um Pedido você precisa estar Logado com a sua Conta, caso não tenha uma conta por favor Cadastre-se !</h2>
	<meta http-equiv="refresh" content="3; url = logar.php">
	</head>
	</html>
<?php }?>
