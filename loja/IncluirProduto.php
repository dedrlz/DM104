<?php include "conecta.php" ?>
<?php
$imagem = "imagens/".$_FILES['imagem']['name'];
$nome= $_POST['nome'];
$descricao= $_POST['descricao'];
$preco= $_POST['preco'];
$quantidade= $_POST['quantidade'];
$data= $_POST['data'];
$sql = mysql_query("INSERT INTO produtos(imagem, nome, descricao, preco, quantidade, data) VALUES ('$imagem','$nome','$descricao','$preco','$quantidade','$data')");
echo("<h1><center>Cadastro de Produto Efetuado com Sucesso!</center></h1>");
?>

    <html>
	<head>
	<meta http-equiv="refresh" content="3; url = admin.php">
	</head>
	</html>

