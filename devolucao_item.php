<?php 

	include('conexao.php');

	$data_devolucao = filter_input(INPUT_POST, 'dataDev', FILTER_SANITIZE_STRING);
	$quantidade_devolucao = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
	$codigo_saida = filter_input(INPUT_POST, 'codigo_saida', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	/* Recupera a quantidade da saida do item */
	$recuperar_quantidade = mysqli_query($conexao, "SELECT quantidade, quantidade_devolvida FROM saidas_item WHERE id = '$codigo_saida'");
	$resultado_quantidade = mysqli_fetch_array($recuperar_quantidade);
	$quantidade = $resultado_quantidade["quantidade"];

	if($quantidade_devolucao<=$quantidade ){

		if( $quantidade > $resultado_quantidade["quantidade_devolvida"]){

			$quantidade_devolvida = $quantidade_devolucao + $resultado_quantidade["quantidade_devolvida"];

			/* Atualiza a data da devolução  */
			$update_saida = mysqli_query($conexao, "UPDATE saidas_item SET data_devolucao = '$data_devolucao', usuario='$usuario', quantidade_devolvida = $quantidade_devolvida WHERE id = '$codigo_saida'");

			/* Recupera o id do item da saida */
			$recuperar_id = mysqli_query($conexao, "SELECT id_item FROM saidas_item WHERE id = '$codigo_saida'");
			$resultado_sql = mysqli_fetch_array($recuperar_id);
			$id = $resultado_sql['id_item'];

			/* Recupera a quantidade disponivel do item  */
			$recuperar_quant_disponivel = mysqli_query($conexao, "SELECT quantidade_disponivel FROM item WHERE id = '$id'");
			$resultado = mysqli_fetch_array($recuperar_quant_disponivel);
			$quantidade_disponivel = $resultado['quantidade_disponivel'] + $quantidade_devolucao;

			/* Atualiza a quantidade disponivel do item  */
			$update_quantidade = mysqli_query($conexao, "UPDATE item SET quantidade_disponivel = '$quantidade_disponivel' WHERE id = '$id'");


			/* Script com notificação de cadastro realizado com sucesso, após o cadastro retorna pra tela de registro de saidas */
			if(mysqli_affected_rows($conexao) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/registro_saida.php'>
					<script type=\"text/javascript\">
						alert(\"Devolução realizada com sucesso.\");
					</script>
				";

			}
		}else{

			/* Script com notificação de erro, após o cadastro retorna pra tela de registro de saidas */
			if(mysqli_affected_rows($conexao) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/registro_saida.php'>
					<script type=\"text/javascript\">
						alert(\"O item já foi todo devolvido.\");
					</script>
				";
			}
		}

	}else{

		/* Script com notificação de erro, após o cadastro retorna pra tela de registro de saidas */
			if(mysqli_affected_rows($conexao) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/registro_saida.php'>
					<script type=\"text/javascript\">
						alert(\"Quantidade devolvida maior que a saida.\");
					</script>
				";
			}

	}

?>