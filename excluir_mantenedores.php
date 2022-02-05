<?php

	include_once("conexao.php");

	$id_mantenedor = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM mantenedores WHERE id = '$id_mantenedor'");
    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/mantenedores.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/mantenedores.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>