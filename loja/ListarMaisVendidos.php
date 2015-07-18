<?php include ('conecta.php');
?>
<?php 
$sql = "select sum(i.quantidade), p.nome,p.imagem from itenspedido i INNER JOIN produtos p WHERE i.idProduto = p.id group BY p.nome desc";

$retorno = mysql_query ($sql);

   while ($linha = mysql_fetch_array($retorno)){
	   	$nome = $linha['nome'];
		$imagem = $linha['imagem'];
		$quantidade = $linha['sum(i.quantidade)'];
 ?>
<ul>
  <li><input name="" type="image" src="<?php echo $imagem?>" width = "50" height ="50"><?php echo '    '.$nome.'   ..............   '.$quantidade.' Unidades Vendidas' ?></li>
 
</ul> 

<?php
 }

?>