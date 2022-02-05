<?php

	include('conexao.php');

	$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);
	$quantidade_disponivel = $quantidade;


	$cadastro_item = mysqli_query($conexao, "INSERT INTO item(descricao, quantidade, quantidade_disponivel, usuario) VALUES('$descricao', '$quantidade', '$quantidade_disponivel', '$usuario')");

	if(mysqli_affected_rows($conexao) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/itens.php'>
			<script type=\"text/javascript\">
				alert(\"Cadastro realizado com sucesso.\");
			</script>
		";

	} 

?>