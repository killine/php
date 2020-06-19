<?php

	include 'conecta.php';

	$nome = "Eren";
	$idade = 20;
	$senha = "abcd";
	$email = "erem@gmail.com";

	$consulta = $conexao->prepare("INSERT INTO clientes (nome,idade,senha) VALUES ('$nome', '$idade', '$senha', '$email')");

	//prepare ==> Prepara a consulta SQL e retorna um identificador de instrução a ser usado para operações adicionais na instruçao. A consulta deve consistir em uma única instrução SQL.

	$consulta->execute();

	//execute ==> Executa uma query que foi previamente preparada usando a função mysqli_prepare()
?>