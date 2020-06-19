<?php
	
	include 'conecta.php';
	//Dados a serem removidos


	$id = 4;

	$consulta = $conexao->prepare("DELETE FROM clientes WHERE id = '$id'");

	$consulta->execute();

?>