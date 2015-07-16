<?php include "conecta.php" ?>
<?php
$nome = $_POST['nome'];
$usuario= $_POST['usuario'];
$password= $_POST['password'];
$data= $_POST['data'];
$sql = mysql_query("INSERT INTO usuarios(nome, usuario, pass, permissoes, imagem, data) VALUES ('$nome','$usuario','$password',2,'NULL','$data')");
echo("<h1><center>Cadastro de Usuario Efetuado com Sucesso!</center></h1>");
?>

    <html>
	<head>
	<meta http-equiv="refresh" content="3; url = index.php">
	</head>
	</html>

