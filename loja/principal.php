<?php include ('conecta.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loja Virtual</title>
</head>

<body>


<form id="form1" name="form1" method="post" action="">
<table width="706" height="181" border="0">
  <tr>
    <td colspan="5" width="50" align="center" valign="middle" bgcolor="#FF6600"><p><a href="carrinho.php"><img src="imagens/carrinho.jpg" width="100" height="100" /></a></p></td>
    <td width="201" height="50" align="center" valign="middle" bgcolor="#FF6600">Buscar</td>
    <td width="110" align="center" valign="middle" bgcolor="#FF6600"><label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" /></td>
    <td width="111" align="center" valign="middle" bgcolor="#FF6600"><input type="submit" name="aceitar" id="aceitar" value="Buscar" /></td> </form>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td colspan="8" align="center" bgcolor="#CCCCCC"><strong>LISTA DE PRODUTOS</strong></td>
    </tr>
     <tr>
    <td align="center" bgcolor="#FF6600"><strong>ID</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>IMAGEM</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>NOME</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>DESCRICAO</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>PRECO</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>QUANTIDADE</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>DATA</strong></td>
    <td align="center" bgcolor="#FF6600"><strong>ADICIONAR</strong></td>
  </tr>
   
   <?php
   $consulta = mysql_query("SELECT * FROM produtos");
   
   
   if (isset($_POST['buscar'])) {
	$consulta = mysql_query("SELECT * FROM produtos where nome like '%" .$_POST['buscar']."%'");   
	   
   }
   
   while ($linha = mysql_fetch_array($consulta)){
	   	$id = $linha['id'];
		$imagem = $linha['imagem'];
		$nome = $linha['nome'];
		$desc = $linha['descricao'];
		$preco = $linha['preco'];
		$quant = $linha['quantidade'];
		$data = $linha['data'];
   ?>  
  <tr>
    <td align="center" bgcolor="#FFFF99"><?php  echo $id; ?></td>
    <td align="center" bgcolor="#FFFF99"><img src="<?php  echo $imagem; ?>" width = "70" height = "70"></td>
    <td align="center" bgcolor="#FFFF99"><?php  echo $nome; ?></td>
    <td align="center" bgcolor="#FFFF99"><?php  echo $desc; ?></td>
    <td align="center" bgcolor="#FFFF99"><?php  echo $preco; ?></td>
    <td align="center" bgcolor="#FFFF99"><?php  echo $quant; ?></td>
    <td align="center" bgcolor="#FFFF99"><?php  echo $data; ?></td>
    <td align="center" bgcolor="#FFFF99">
    <form action="carrinho.php" method="post" name="comprar">
    <input name="id_txt" type="hidden" value="<?php  echo $id; ?>" />
    <input name="nome" type="hidden" value="<?php  echo $nome; ?>" />
    <input name="preco" type="hidden" value="<?php  echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="1"/>
    <input name="Comprar" type="submit" value="Comprar" id="Comprar" />
    </form>
    </td>
  </tr>
<?php
   }
?>
</table>


</form>
</body>
</html>