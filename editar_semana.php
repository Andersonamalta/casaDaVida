<?php

	include_once("conexao.php");

	$segunda = filter_input(INPUT_POST, 'segunda');
	$terca = filter_input(INPUT_POST, 'terca');
	$quarta = filter_input(INPUT_POST, 'quarta');
	$quinta = filter_input(INPUT_POST, 'quinta');
	$sexta = filter_input(INPUT_POST, 'sexta');
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	$id_semana = filter_input(INPUT_POST, 'identificador', FILTER_SANITIZE_STRING);

	if($segunda == null){
		$segunda = 0;
	}if($terca == null){
		$terca = 0;
	}if($terca == null){
		$terca = 0;
	}if($quarta == null){
		$quarta = 0;
	}if($quinta == null){
		$quinta = 0;
	}if($sexta == null){
		$sexta = 0;
	}


	$total = $segunda + $terca + $quarta + $quinta + $sexta;


	/* Sql para atualizar os campos das quantidades de pessoas que almoçaram naquele dia */
	$sql = mysqli_query($conexao, "UPDATE semana_refeicao SET segunda='$segunda', terca='$terca', quarta = '$quarta' ,quinta='$quinta', sexta='$sexta', total='$total', usuario='$usuario' WHERE id = '$id_semana'") or die
    ("erro na conexao");

    /* Sql para recuperar o id do mes cadastrado na semana especifica */
    $slq_idMes = mysqli_query($conexao, "SELECT id_mes FROM semana_refeicao WHERE id = '$id_semana'");
	$resultado = mysqli_fetch_array($slq_idMes);
	$id_mes = $resultado["id_mes"];

	/* Sql para somar o campo total na tabela da semana daquele mês */
	$sql_totalMes = mysqli_query($conexao, "SELECT SUM(total) FROM semana_refeicao WHERE id_mes = '$id_mes'");
	$resultado_mes = mysqli_fetch_array($sql_totalMes); 
	$total_mes = $resultado_mes['SUM(total)'];


	/* Sql para atualizar o campo total do mês  */
    $total_mes = mysqli_query($conexao, "UPDATE controle_refeicaoMes SET total='$total_mes', usuario='$usuario' WHERE id = '$id_mes'");
   

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Edição realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Erro na edição não realizada.\");
			</script>
		";
    }


?>