<?php include ('conecta.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carrinho de Compras</title>
<style type="text/css">
input {
	text-align: center;
}
</style>
</head>

<body>
<p>Carrinho de Compras</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Meus Produtos escolhidos são:</p>
<?php


	if (isset($_POST['id_txt']))
	{
		$id = $_POST['id_txt'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$quantidade = $_POST['quantidade'];
		$meucarrinho [] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade);
	}

session_start();	
	
	if (isset($_SESSION['carrinho'])){
		 $meucarrinho = $_SESSION['carrinho'];
		if (isset($_POST['id_txt'])) {
		$id = $_POST['id_txt'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$quantidade = $_POST['quantidade'];
		$pos = -1;
		for ($i =0;$i < count($meucarrinho);$i++) {
			if ($id == $meucarrinho[$i] ['id']) {
				$pos = $i;
			}
			}
			
		if ($pos<>-1) {
			$quant = $meucarrinho[$pos] ['quantidade'] + $quantidade ;
			$meucarrinho [$pos] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quant);
		}
		else {
			$meucarrinho [] = array ('id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade); }
		
	} }
	
	if (isset($_POST['id2'])){
		$indice = $_POST['id2'];
		$quant = $_POST['quantidade2'];
		$meucarrinho [$indice] ['quantidade'] = $quant;
		}
		
	if (isset($_POST['id3'])){
		$indice = $_POST['id3'];
		$meucarrinho [$indice] = NULL;
		}
	
	

	if (isset ($meucarrinho)) $_SESSION['carrinho'] = $meucarrinho;

?>
<table width="414" border="0">
  <tr>
    <td colspan="5" align="center" valign="middle" bgcolor="#ADADAD">LISTA DE PRODUTOS COMPRADOS</td>
  </tr>
  <tr>
    <td width="47" align="center" valign="middle" bgcolor="#FF6600">NOME</td>
    <td width="102" align="center" valign="middle" bgcolor="#FF6600">PREÇO</td>
    <td width="107" align="center" valign="middle" bgcolor="#FF6600">QUANTIDADE</td>
    <td width="140" colspan="2" align="center" valign="middle" bgcolor="#FF6600">VALOR TOTAL</td>
  </tr>
	
	<?php
	
	if (isset($meucarrinho)){
		$total = 0;
		for ($i=0; $i < count($meucarrinho); $i++) {
		
		if ($meucarrinho[$i] <> NULL){
		
	?> 

  <tr>
    <td align="center" valign="middle" bgcolor="#FFCC33"><?php echo $meucarrinho [$i] ['nome'] ?></td>
    <td align="center" valign="middle" bgcolor="#FFCC33"><?php echo $meucarrinho [$i] ['preco'] ?></td>
    <td align="center" valign="middle" bgcolor="#FFCC33">
    <form action="" method="post" name="atualizar">
      <input name="id2" type="hidden" value="<?php echo $i ?>" />
    <input name="quantidade2" type="text" id="quantidade2" value="<?php echo $meucarrinho [$i] ['quantidade'] ?>" size="2" maxlength="2" />
    <input type="image" src="imagens/atualizacao.jpg" align="middle" width = "25" height = "25"/>

    </form></td>
    
    <?php 
		$subtotal = $meucarrinho [$i] ['preco'] * $meucarrinho [$i] ['quantidade'];
		$total = $total + $subtotal;
	?>
    <td align="center" valign="middle" bgcolor="#FFCC33"><?php echo $subtotal ?></td>
    <td align="center" valign="middle" bgcolor="#FFCC33"><form action="" method="post">
    <input name="id3" type="hidden" value="<?php echo $i ?>" />
    <input name="" type="image" src="imagens/excluir.jpg" width="20" height="20" />
    
    </form></td>
       
  </tr>
  <?php }}}?>
  
  <tr>
    <td height="32" colspan="3" align="right" bgcolor="#FFCC33">TOTAL</td>
    <td colspan="2" align="center" bgcolor="#FFCC33"><?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td height="32" align="right" bgcolor="#FFCC33">&nbsp;</td>
    <td height="32" align="right" bgcolor="#FFCC33">&nbsp;</td>
    <td height="32" align="right" bgcolor="#FFCC33"><form id="form1" name="form1" method="post" action="confirmar.php">
      <input name="carrinho" type="hidden" value="<?php $_SESSION["dados"] = $meucarrinho; ?>" />
      <input name="total" type="hidden" value="<?php echo $total ?>" />
      <input type="submit" name="button" id="button" value="Confirmar Compra" />
    </form></td>
    <td colspan="2" align="center" bgcolor="#FFCC33">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p><a href="produtos.php">Voltar</a></p>
</body>
</html>