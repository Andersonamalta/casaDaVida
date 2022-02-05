<?php

	include("conexao.php");

	$id_mes = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM controle_refeicaoMes WHERE id = '$id_mes'");

	$excluir_semana = mysqli_query($conexao, "DELETE FROM semana_refeicao WHERE id_mes = '$id_mes'");

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>