<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuario</title>
</head>

<body>
<h1>Bem Vindo <?php echo $_SESSION['minhasessao'] ['nome']?> !! </h1>
<p><strong><a href="ConsultarPedidos.php">Meus Pedidos</a></strong></p>
<p><strong><a href="SairdaSessao.php">Logout</a></strong></p>
<p><strong><a href="index.php">Voltar para o Inicio</a></strong></p>
</body>
</html>