<?php 

	include_once('conexao.php');

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
	$obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
	$modificado = "";
	$usuario = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);

	date_default_timezone_set('America/Bahia');
	$data = date("Y-m-d, H:i");
	$data_doacao = date("Y-m-d");

	$result_colaboradores = mysqli_query($conexao, "INSERT INTO colaboradores (nome, cpf, nascimento, sexo, telefone, whatsapp, email, cep, endereco, numero, bairro, cidade, estado, redesocial, pergunta1, timedecoracao, pergunta2, pergunta3, observacao, criado, modificado, usuario) VALUES ('$nome', '$cpf', '$nascimento', '$sexo', '$telefone', '$whatsapp', '$email', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$redesocial', '$pergunta1', '$time', '$pergunta2', '$pergunta3', '$obs', '$data', '$modificado', '$usuario')");

	$result_doacao = mysqli_query($conexao, "INSERT INTO doacoes(data, doador, cpf_doador, valor, doacao, usuario) VALUES('$data_doacao', '$nome', '$cpf', '$modificado', '$pergunta3', '$usuario')");

	$aniversariantes = mysqli_query($conexao, "INSERT INTO aniversariantes(nome, dataNascimento, whatsapp) VALUES('$nome', '$nascimento', '$whatsapp')");

	/* Script com notificação de cadastro realizado com sucesso, após o cadastro retorna pra tela de colaboradores */
	if(mysqli_affected_rows($conexao) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/colaboradores.php'>
			<script type=\"text/javascript\">
				alert(\"Cadastro realizado com sucesso.\");
			</script>
		";

	}
?>