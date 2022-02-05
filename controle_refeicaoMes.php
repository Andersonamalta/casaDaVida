<?php 
	
	include('conexao.php');

	$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
	$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);
	$total = 0;

	$criar_mes = mysqli_query($conexao, "INSERT INTO controle_refeicaoMes(mes, ano, total, usuario) VALUES('$mes', '$ano', '$total', '$usuario')");

	/* Script com notificação de cadastro realizado com sucesso, após o cadastro retorna pra tela de colaboradores */
	if(mysqli_affected_rows($conexao) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/controle_refeicoes.php'>
			<script type=\"text/javascript\">
				alert(\"Cadastro realizado com sucesso.\");
			</script>
		";

	}

?>