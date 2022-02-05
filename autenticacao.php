<?php

include('conexao.php');

/* capturando os dadosc*/
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);


/* fazer consulta ao banco de dados, para verificar se as informações existem */
$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
$resultado_sql = mysqli_fetch_array($query);
$hash = $resultado_sql['senha'];
$resultado_email = $resultado_sql['email'];


/* contando quantas linhas existem com esse email e senha no banco de dados*/
$row = mysqli_num_rows($query);


if ($email == $resultado_email){

	/* password_verify : Essa função verifica se uma senha fornecida confere com um hash armazenado   */
	if(password_verify($senha, $hash)){
		session_start();
	    $_SESSION['email'] = $_POST['email'];
	    $_SESSION['senha'] = $_POST['senha'];
	    header('Location: index.php');
	    exit();
	}

}if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/login.php'>
			<script type=\"text/javascript\">
				alert(\"Dados invalidos\");
			</script>
		";
}


?>