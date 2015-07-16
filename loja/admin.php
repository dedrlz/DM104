<?php include ('conecta.php');
?>

<table width="737" border="0">
  <tr>
    <td colspan="9" align="center" bgcolor="#999999"><strong>LISTA DE PRODUTOS</strong></td>
  </tr>
  <tr>
    <td height="39" colspan="9" align="center" valign="middle" bgcolor="#CCCCCC"><form name="form3" method="post" action="">
      <input type="submit" name="Incluir" id="Incluir" value="Incluir Novos Produtos">
    </form></td>
  </tr>
  <tr>
    <td width="19" align="center" bgcolor="#FF6633">ID</td>
    <td width="76" align="center" bgcolor="#FF6633">IMAGEM</td>
    <td width="56" align="center" bgcolor="#FF6633">NOME</td>
    <td width="99" align="center" bgcolor="#FF6633">DESCRICAO</td>
    <td width="51" align="center" bgcolor="#FF6633">PRECO</td>
    <td width="102" align="center" bgcolor="#FF6633">QUANTIDADE</td>
    <td width="79" align="center" bgcolor="#FF6633">DATA</td>
    <td colspan="2" align="center" bgcolor="#FF6633">OPÇÕES</td>
  </tr>
  
   <?php
   $consulta = mysql_query("SELECT * FROM produtos");
   
   
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
    <td align="center" bgcolor="#FFFF66"><?php  echo $id; ?></td>
    <td align="center" bgcolor="#FFFF66"><img src="<?php  echo $imagem; ?>" width = "70" height = "70"></td>
    <td align="center" bgcolor="#FFFF66"><?php  echo $nome; ?></td>
    <td align="center" bgcolor="#FFFF66"><?php  echo $desc; ?></td>
    <td align="center" bgcolor="#FFFF66"><?php  echo $preco; ?></td>
    <td align="center" bgcolor="#FFFF66"><?php  echo $quant; ?></td>
    <td align="center" bgcolor="#FFFF66"><?php  echo $data; ?></td>
    <td width="73" align="center" bgcolor="#FFFF66"><form name="form1" method="post" action="LayoutEditar.php">
      <input type="submit" name="Editar" id="Editar" value="Editar">
      <input name="ID" type="hidden" value="<?php  echo $id; ?>" />
     <input name="imagem" type="hidden" value="<?php  echo $imagem; ?>" />
     <input name="nome" type="hidden" value="<?php  echo $nome; ?>" />
     <input name="descricao" type="hidden" value="<?php  echo $desc; ?>"/>
     <input name="preco" type="hidden" value="<?php  echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="<?php  echo $quant; ?>" />
    <input name="data" type="hidden" value="<?php  echo $data; ?>" />
    </form></td>
    <td width="65" align="center" bgcolor="#FFFF66"><form name="form2" method="post" action="DeletaProduto.php">
    <input name="ID" type="hidden" value="<?php  echo $id; ?>" />
      <input type="submit" name="Deletar" id="Deletar" value="Deletar">

    </form></td>
  </tr>
  <?php
   }
?>
</table>
