<?php

	include 'conecta.php';
	//Dados a serem atualizados

	$id = 4;
	$nome_novo = "Armin";

	$consulta = $conexao->prepare("UPDATE clientes SET nome ='$nome_novo' WHERE id = '$id'");

	$consulta->execute();

?>