<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "loja";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
        
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

