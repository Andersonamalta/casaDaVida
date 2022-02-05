<?php

	include('conexao.php');

	$data_doacao = filter_input(INPUT_POST, 'dataDoacao', FILTER_SANITIZE_STRING);
	$doador = filter_input(INPUT_POST, 'doador', FILTER_SANITIZE_STRING);
	$cpf_doador = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
	$doacao = filter_input(INPUT_POST, 'doacao', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	$registro_doacao = mysqli_query($conexao, "INSERT INTO doacoes(data, doador, cpf_doador, valor, doacao, usuario) VALUES ('$data_doacao', '$doador', '$cpf_doador', '$valor', '$doacao', '$usuario')");

	if(mysqli_affected_rows($conexao) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/doacao.php'>
			<script type=\"text/javascript\">
				alert(\"Doação realizada com sucesso.\");
			</script>
		";

	}




?>