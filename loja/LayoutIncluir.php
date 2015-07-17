<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inclusão de Produtos</title>
</head>

<body>
<form action="IncluirProduto.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label>Imagem
      <input type="file" name="imagem" id="fileField" />
    </label>
  </p>
  <p>
    <label>Nome
      <input type="text" name="nome" id="nome" />
    </label>
  </p>
  <p>
    <label>Descricao
      <input type="text" name="descricao" id="descricao" />
    </label>
  </p>
  <p>
    <label>Preço
      <input type="text" name="preco" id="preco" />
    </label>
  </p>
  <p>
    <label>Quantidade
      <input type="text" name="quantidade" id="quantidade" />
    </label>
  </p>
  <p>
    <label>Data
      <input name="data" type="text" id="data" value = "<?php echo date('Y/m/d'); ?>" readonly="readonly" />
    </label>
  </p>
  <p>
    <input type="submit" name="confirmar" id="confirmar" value="Confirmar" />
  </p>
</form>
</body>
</html>