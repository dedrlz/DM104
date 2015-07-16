<?php include ('conecta.php');
?>
<?php
$ID = $_POST['ID'];
$sql = "DELETE FROM produtos WHERE ID = ".$ID;
mysql_query($sql);
echo("<h1><center>Produto Excluido com Sucesso!</center></h1>");
?>
    <html>
	<head>
	<meta http-equiv="refresh" content="2; url = admin.php">
	</head>
	</html>
