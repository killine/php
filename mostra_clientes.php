<?php
	//incluir arquivo que tem os dados de conexão ao banco
	
	include 'conecta.php';

	$consulta = "SELECT * FROM clientes";

	foreach ($conexao -> query($consulta) as $linha) {

			echo $linha['id'] . "<br>";
			echo $linha['nome'] . "<br>";
			echo $linha['idade'] . "<br>";
			echo $linha['senha'] . "<br>";
			echo $linha['email'] . "<br>";
			echo "<hr> <br>";
	}

	echo "Exibindo a variavel linha";
	echo "<pre>";
	var_dump($linha);
	echo "</pre>";
?>