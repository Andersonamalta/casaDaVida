<?php

	include('conexao.php');

	$data_doacao = filter_input(INPUT_POST, 'dataDoacao', FILTER_SANITIZE_STRING);
	$doador = filter_input(INPUT_POST, 'doador', FILTER_SANITIZE_STRING);
	$cpf_doador = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
	$doacao = filter_input(INPUT_POST, 'doacao', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	$id_doacao = filter_input(INPUT_POST, 'identificador', FILTER_SANITIZE_STRING);

	$sql = mysqli_query($conexao, "UPDATE doacoes SET data='$data_doacao', doador='$doador', cpf_doador='$cpf_doador', valor='$valor', doacao='$doacao', usuario='$usuario' WHERE id = '$id_doacao'") or die
    ("erro na conexao");

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/doacao.php'>
			<script type=\"text/javascript\">
				alert(\"Edição realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/doacao.php'>
			<script type=\"text/javascript\">
				alert(\"Erro na edição não realizada.\");
			</script>
		";
    }

?>