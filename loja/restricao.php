<?php 
session_start();
if (!empty($_SESSION))
{
if ($_SESSION['minhasessao'] ['permissoes'] == 1) { ?>
	<html>
	<head>
	<meta http-equiv="refresh" content="1; url = admin.php">
	</head>
	</html>
 <?php
	
	
	}
else if ($_SESSION['minhasessao'] ['permissoes'] == 2){ ?>
    <html>
	<head>
	<meta http-equiv="refresh" content="1; url = index.php">
	</head>
	</html>
 <?php }
else
	{ 
		?>
        
    <html>
	<head>
	<meta http-equiv="refresh" content="1; url = logar.php">
	</head>
	</html>
<?php } }?>

        
