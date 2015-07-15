<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Clientes</title>
</head>

<body>
<form action="cadastrando.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="textfield">Nome</label>
    <input type="text" name="nome" id="textfield" />
  </p>
  <p>
    <label for="textfield2">Usuario</label>
    <input type="text" name="usuario" id="textfield2" />
  </p>
  <p>
    <label for="textfield3">Password</label>
    <input type="text" name="password" id="textfield3" />
  </p>
  <p>
    <label for="textfield4">Data</label>
    <input type="text" name="data" id="textfield4" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Confirmar" />
  </p>
</form>
</body>
</html>