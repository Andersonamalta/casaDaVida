<?php

	include("conexao.php");

	$id_item = intval($_GET['id']);

	$sql = mysqli_query($conexao, "DELETE FROM item WHERE id = '$id_item'");

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/itens.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/itens.php'>
			<script type=\"text/javascript\">
				alert(\"Exclusão não realizada.\");
			</script>
		";
    }


?>