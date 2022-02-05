<?php

include('conexao.php');

/* capturando os dadosc*/
$email = mysqli_real_escape_string($conexao, $_POST['email_modal']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha_modal']);
$nome = "Administrador";


/* fazer consulta ao banco de dados, para verificar se as informações existem */
$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nome = '$nome'");
$resultado_sql = mysqli_fetch_array($query);
$hash = $resultado_sql['senha'];
$resultado_email = $resultado_sql['email'];

/* contando quantas linhas existem com esse email e senha no banco de dados*/
$row = mysqli_num_rows($query);


if ($email == $resultado_email){

    if(password_verify($senha, $hash)){
		session_start();
	    $_SESSION['email'] = $_POST['email_modal'];
	    $_SESSION['senha'] = $_POST['senha_modal'];
	    header('Location: cadastrar.php');
	    exit();
	}

}if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
	echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/casadavida/login.php'>
			<script type=\"text/javascript\">
				alert(\"Acesso negado\");
			</script>
		";
}

?>