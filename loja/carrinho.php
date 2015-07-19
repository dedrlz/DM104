<?php include ('conecta.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Carrinho de Compras</title>
</head>
<body>
<h1>Carrinho de Compras</h1>
<h2>Meus Produtos escolhidos são:</h2>
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
<table id="tabelaCarrinho">
  <tr>
    <td id="cabecalhoLista" colspan="5">LISTA DE PRODUTOS COMPRADOS</td>
  </tr>
  <tr>
    <td>NOME</td>
    <td>PREÇO</td>
    <td>QUANTIDADE</td>
    <td colspan="2">VALOR TOTAL</td>
  </tr>
	
	<?php
	
	if (isset($meucarrinho)){
		$total = 0;
		for ($i=0; $i < count($meucarrinho); $i++) {
		
		if ($meucarrinho[$i] <> NULL){
		
	?> 

  <tr id="produtos">
    <td ><?php echo $meucarrinho [$i] ['nome'] ?></td>
    <td ><?php echo $meucarrinho [$i] ['preco'] ?></td>
    <td >
    <form action="" method="post" name="atualizar">
      <input name="id2" type="hidden" value="<?php echo $i ?>" />
    <input id="textQuantidade" name="quantidade2" type="text" id="quantidade2" value="<?php echo $meucarrinho [$i] ['quantidade'] ?>" size="2" maxlength="2" />
    <input id="imagemAtualizacao" type="image" src="imagens/atualizacao.jpg"/>

    </form></td>
    
    <?php 
		$subtotal = $meucarrinho [$i] ['preco'] * $meucarrinho [$i] ['quantidade'];
		$total = $total + $subtotal;
	?>
    <td><?php echo $subtotal ?></td>
    <td><form action="" method="post">
    <input name="id3" type="hidden" value="<?php echo $i ?>" />
    <input id="imagemAtualizacao" name="" type="image" src="imagens/excluir.jpg" />
    
    </form></td>
       
  </tr>
  <?php }}}?>
  
  <tr id="produtos">
    <td id="total" colspan="3">TOTAL</td>
    <td colspan="2"><?php if (isset($total)) echo $total ?></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td><form id="form1" name="form1" method="post" action="confirmar.php">
      <input name="carrinho" type="hidden" value="<?php $_SESSION["dados"] = $meucarrinho; ?>" />
      <input name="total" type="hidden" value="<?php echo $total ?>" />
      <input type="submit" name="button" id="button" value="Confirmar Compra" />
    </form></td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<h1><a href="produtos.php">Voltar</a></h1>
</body>
</html>