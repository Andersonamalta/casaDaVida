<?php

	include_once("conexao.php");

	$id_colaborador = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM colaboradores WHERE id = '$id_colaborador'");

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/colaboradores.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/colaboradores.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>