<?php 
	
	include('conexao.php');


	$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
	$responsavel = filter_input(INPUT_POST, 'responsavel', FILTER_SANITIZE_STRING);
	$justificativa = filter_input(INPUT_POST, 'justificativa', FILTER_SANITIZE_STRING);
	$data_saida = filter_input(INPUT_POST, 'dataSaida', FILTER_SANITIZE_STRING);
	$data_devolucao = date("0000-00-00");
	$quantidadeSaida = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	/* Recupera a descricao do item que vai dar saida */
	$recuperar_descricao = mysqli_query($conexao, "SELECT descricao, quantidade, quantidade_disponivel FROM item WHERE id = '$codigo'");
	$resultado_descricao = mysqli_fetch_array($recuperar_descricao);
	$descricao = $resultado_descricao["descricao"];


	if($resultado_descricao["quantidade_disponivel"]>=$quantidadeSaida){

		/* Subtrai da quantidade disponivel o item que deu saida */
		$quantidade_disponivel = $resultado_descricao["quantidade"] - $quantidadeSaida;


		/* Cadastra uma saida na tabela de saidas_item no banco */
		$cadastro_saida = mysqli_query($conexao, "INSERT INTO saidas_item (id_item, descricao, responsavel, justificativa, data_saida, data_devolucao, quantidade, usuario) VALUES ('$codigo', '$descricao', '$responsavel', '$justificativa', '$data_saida', '$data_devolucao', '$quantidadeSaida', '$usuario')");

		/* Atualiza a coluna de quantidade_disponivel  */
		$update_item = mysqli_query($conexao, "UPDATE item SET quantidade_disponivel = '$quantidade_disponivel' WHERE id = '$codigo'");

		/* Script com notificação de cadastro realizado com sucesso, após o cadastro retorna pra tela de itens */
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/itens.php'>
				<script type=\"text/javascript\">
					alert(\"Saida realizada com sucesso.\");
				</script>
			";

		}

	}else{

		/* Script com notificação de erro, após o cadastro retorna pra tela de itens */
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/itens.php'>
				<script type=\"text/javascript\">
					alert(\"Quantidade não disponível.\");
				</script>
			";

		}

	}

	

?>