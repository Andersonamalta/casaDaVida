<?php

	include_once("conexao.php");

	$id_doacao = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM doacoes WHERE id = '$id_doacao'");

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/doacao.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/doacao.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>