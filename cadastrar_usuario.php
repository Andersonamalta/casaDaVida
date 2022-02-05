<?php

	include('conexao.php');

	/* capturando os dados*/
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
	$confir_senha = mysqli_real_escape_string($conexao, $_POST['confirma_senha']);

	/* API propia do PHP aonde criptografa a senha */
	$options = [
    'cost' => 7,
    'salt' => 'House32255288of/000131Life',
	];

	$senha_criptografada = password_hash($senha, PASSWORD_BCRYPT, $options);

	if($confir_senha != $senha ){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casadavida/cadastrar.php'>
			<script type=\"text/javascript\">
				alert(\"Senha inválida\");
			</script>
		";

	}else{
		$cadastro_usuario = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha_criptografada')");

		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/cadastrar.php'>
				<script type=\"text/javascript\">
					alert(\"Cadastro realizado com sucesso.\");
				</script>
			";

		}
	}

?>