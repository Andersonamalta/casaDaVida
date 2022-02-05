<?php

	include('conexao.php');

	$id = intval($_GET['id']);
	$usuario = ($_GET['usuario']);

	$criar = mysqli_query($conexao, "INSERT INTO semana_refeicao(id_mes, usuario) VALUES('$id', '$usuario')");


	if(mysqli_affected_rows($conexao) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Semana criada com sucesso.\");
			</script>
		";

	}



?>