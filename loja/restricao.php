<?php 
session_start();
if ($_SESSION['minhasessao'] ['permissoes'] == 1) {
	//echo 'Tem Permissão <br>';
	//echo $_SESSION['minhasessao'] ['nome'].'<br>';
	//echo $_SESSION['minhasessao'] ['usuario'].'<br>';
	//echo $_SESSION['minhasessao'] ['permissoes'].'<br>';
	
	
	}
else
	{
		 //echo 'Nao tem Permissao para acessar' 
		?>
        
    <html>
	<head>
	<meta http-equiv="refresh" content="3; url = logar.php">
	</head>
	</html>
        
        


<?php } ?>

        
    <html>
	<head>
	<meta http-equiv="refresh" content="3; url = index.php">
	</head>
	</html>