<?php

	include_once("conexao.php");

	$id_voluntario = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM voluntarios WHERE id = '$id_voluntario'");
    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/voluntarios.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/voluntarios.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>