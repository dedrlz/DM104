<?php include ('conecta.php');
?>
<?php
$ID = $_POST['ID'];
if (!empty($_FILES['imagem']['name'])) {
$imagem = "imagens/".$_FILES['imagem']['name'];}
else
$imagem = $_POST['caminhoImagem'];
$nome= $_POST['nome'];
$descricao= $_POST['descricao'];
$preco= $_POST['preco'];
$quantidade= $_POST['quantidade'];
$data= $_POST['data'];
$sql = "UPDATE produtos SET imagem = '" .$imagem."', nome = '" .$nome."', descricao = '" .$descricao."', preco = '" .$preco."', quantidade = '" .$quantidade."', data = '" .$data."' WHERE ID = ".$ID;
mysql_query($sql);
echo("<h1><center>Produto Alterado com Sucesso!</center></h1>");
?>
    <html>
	<head>
	<meta http-equiv="refresh" content="2; url = admin.php">
	</head>
	</html>
