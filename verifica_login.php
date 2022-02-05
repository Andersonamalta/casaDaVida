<?php


	session_start();

	if(!isset($_SESSION["email"]) and !isset($_SESSION["senha"])){
		echo "<script>location.href='login.php'</script>";
	}


?>