<?php
	include("conecta.php");
	include("banco-usuario.php");
	include("logica-usuario.php");
	
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	
	
	adicionaUsuario($conexao,$nome,$email,$senha);
		header('Location:formulario-login.php');
		die();
	