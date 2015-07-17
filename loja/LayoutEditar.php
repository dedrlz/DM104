<form action="EditaProduto.php" method="post" enctype="multipart/form-data" name="form1">
  <p>
    <label>ID
      <input name="ID" type="text" id="textfield" value="<?php echo $_POST['ID']; ?>" readonly="readonly" >
    </label>
  </p>
  <p>
    <label>Imagem
      <input name="caminhoImagem" type="text" id="caminhoImagem" value = "<?php echo $_POST['imagem']; ?>" readonly="readonly" />
<input type="file" name="imagem" id="textfield2" >
    </label>
  </p>
  <p>
    <label>Nome
      <input type="text" name="nome" id="textfield3" value="<?php echo $_POST['nome']; ?>">
    </label>
  </p>
  <p>
    <label>Descricao
      <input type="text" name="descricao" id="textfield4" value="<?php echo $_POST['descricao']; ?>">
    </label>
  </p>
  <p>
    <label>Preço
      <input type="text" name="preco" id="textfield5" value="<?php echo $_POST['preco']; ?>">
    </label>
  </p>
  <p>
    <label>Quantidade
      <input type="text" name="quantidade" id="textfield6 " value="<?php echo $_POST['quantidade']; ?>">
    </label>
  </p>
  <p>
    <label>Data
      <input name="data" type="text" id="textfield7" value="<?php echo date('Y/m/d'); ?>" readonly="readonly">
    </label>
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Confirmar" id="Confirmar" value="Confirmar">
  </p>
</form>
