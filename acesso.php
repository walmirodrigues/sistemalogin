<?php
	session_start();

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario == "admin" && $senha == "123"){
		$_SESSION['usuario'] = $usuario;
		header('Location:benvindo.php');
	}else{
		header('Location:index.php');	
	}
?> 