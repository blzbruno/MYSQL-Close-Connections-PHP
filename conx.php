<?php 
	$conexao = new PDO("mysql:host=host;dbname=dbname", "user", "pass",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
