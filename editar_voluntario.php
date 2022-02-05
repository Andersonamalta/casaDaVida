<?php

	include_once("conexao.php");

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$nascimento = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_STRING);
	$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
	$telefone = filter_input(INPUT_POST, 'prependedtext', FILTER_SANITIZE_STRING);
	$whatsapp = filter_input(INPUT_POST, 'whatsapp', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$endereco = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	$redesocial = filter_input(INPUT_POST, 'redesocial', FILTER_SANITIZE_STRING);
	$pergunta1 = filter_input(INPUT_POST, 'pergunta1', FILTER_SANITIZE_STRING);
	$time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING);
	$pergunta2 = filter_input(INPUT_POST, 'pergunta2', FILTER_SANITIZE_STRING);
	$pergunta3 = filter_input(INPUT_POST, 'pergunta3', FILTER_SANITIZE_STRING);
	$dias = filter_input(INPUT_POST, 'dias', FILTER_SANITIZE_STRING);
	$horarios = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
	$obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	date_default_timezone_set('America/Bahia');
	$data = date("Y-m-d, H:i");


	$id_voluntario = filter_input(INPUT_POST, 'identificador', FILTER_SANITIZE_STRING);

	$sql = mysqli_query($conexao, "UPDATE voluntarios SET nome='$nome', cpf='$cpf', nascimento='$nascimento', sexo='$sexo', telefone='$telefone', whatsapp='$whatsapp', email='$email', cep='$cep', endereco='$endereco', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado', redesocial='$redesocial', pergunta1='$pergunta1', timedecoracao='$time', pergunta2='$pergunta2', pergunta3='$pergunta3', dias='$dias', horarios='$horarios', observacao='$obs', modificado='$data', usuario='$usuario' WHERE id = '$id_voluntario'") or die
    ("erro na conexao");

    $aniversariantes = mysqli_query($conexao, "UPDATE aniversariantes SET nome='$nome', nascimento='$nascimento', whatsapp='$whatsapp' WHERE nome = '$nome'" );

    if($sql){
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/voluntarios.php'>
			<script type=\"text/javascript\">
				alert(\"Edição realizada com sucesso.\");
			</script>
		";
    }else{
    	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/voluntarios.php'>
			<script type=\"text/javascript\">
				alert(\"Erro na edição não realizada.\");
			</script>
		";
    }


?>