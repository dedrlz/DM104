<?php
session_start();
if (!empty($_SESSION)) {
if ($_SESSION['minhasessao'] ['permissoes'] == 2){
?>
	 <html>
     <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     </head>
     <meta http-equiv="refresh" content="0; url = Usuario.php">
	 </html>
<?php }} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logar</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="login.php">
  <p>
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" />
  </p>
  <p>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Entrar" />
  </p>
</form>
</body>
</html>