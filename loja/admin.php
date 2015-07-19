<?php include ('conecta.php');
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Area do Administrador</title>
</head>
<body>
<table id="tabelaProdutos">
  <tr>
    <td id="cabecalhoLista" colspan="9"><strong>LISTA DE PRODUTOS</strong></td>
  </tr>
  <tr>
    <td colspan="9"><form name="form3" method="post" action="LayoutIncluir.php">
      <input type="submit" name="Incluir" id="Incluir" value="Incluir Novos Produtos">
    </form></td>
  </tr>
  <tr >
    <td>ID</td>
    <td>IMAGEM</td>
    <td>NOME</td>
    <td>DESCRICAO</td>
    <td>PRECO</td>
    <td>QUANTIDADE</td>
    <td>DATA</td>
    <td colspan="2">OPÇÕES</td>
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
  
  <tr id="produtos">
    <td><?php  echo $id; ?></td>
    <td><img id="imagemListaProdutos" src="<?php  echo $imagem; ?>"></td>
    <td><?php  echo $nome; ?></td>
    <td><?php  echo $desc; ?></td>
    <td><?php  echo $preco; ?></td>
    <td><?php  echo $quant; ?></td>
    <td><?php  echo $data; ?></td>
    <td><form name="form1" method="post" action="LayoutEditar.php">
      <input type="submit" name="Editar" id="Editar" value="Editar">
      <input name="ID" type="hidden" value="<?php  echo $id; ?>" />
     <input name="imagem" type="hidden" value="<?php  echo $imagem; ?>" />
     <input name="nome" type="hidden" value="<?php  echo $nome; ?>" />
     <input name="descricao" type="hidden" value="<?php  echo $desc; ?>"/>
     <input name="preco" type="hidden" value="<?php  echo $preco; ?>" />
    <input name="quantidade" type="hidden" value="<?php  echo $quant; ?>" />
    <input name="data" type="hidden" value="<?php  echo $data; ?>" />
    </form></td>
    <td><form name="form2" method="post" action="DeletaProduto.php">
    <input name="ID" type="hidden" value="<?php  echo $id; ?>" />
      <input type="submit" name="Deletar" id="Deletar" value="Deletar">

    </form></td>
  </tr>
  <?php
   }
?>
</table>
<p>&nbsp;</p>
<p><a href="SairdaSessao.php">Sair do Módulo Administrador</a></p>
</body>
</html>
