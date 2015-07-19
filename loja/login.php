<?php include "conecta.php" ?>
<?php 
$usuariol = $_POST['user'];
$passl = $_POST['pass'];

session_start();
$consulta = mysql_query("select * from usuarios");
$porta = 'continuar';

while ($linhas = mysql_fetch_array($consulta) and $porta = 'continuar' ){
	$id = $linhas['id'];
	$nome = $linhas['nome'];
	$usuario = $linhas['usuario'];
	$pass = $linhas['pass'];
	$permissoes = $linhas['permissoes'];
	$data = $linhas['data'];
	
	
	if (isset($usuariol) and isset ($passl)){
		if (($usuario == $usuariol) and ($pass == $passl)) {
			
			$minhasessao = array ('id' => $id,'nome' => $nome, 'usuario' => $usuario, 'pass' => $pass, 'permissoes' => $permissoes, 'data' => $data);

	$_SESSION['minhasessao'] = $minhasessao;

?>

<html>
<head>
<meta http-equiv="refresh" content="0; url = restricao.php">
</head>
</html>

<?php 
$porta = 'sair';
exit;
	}
	else {
		$resultado = 'nao';
		}	
		}
	
			}
	if ($resultado = 'nao') {
	 echo 'O usuario ou a senha estão incorretos';	
	 ?>
	 <html>
     <head>
     </head>
     <meta http-equiv="refresh" content="3; url = logar.php">
     
     </html>
 
	 <?php }?>	
			
