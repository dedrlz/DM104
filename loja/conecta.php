<?php
$host = "localhost";
$user = "u892938176_root";
$pass = "123456";
$banco = "loja";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
$db = mysql_select_db($banco, $conexao) or die (mysql_error());
?>