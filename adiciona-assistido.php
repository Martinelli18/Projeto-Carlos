<?php include("conecta.php");
	  include("banco-usuario.php");
	  include("logica-usuario.php");
	  
	  $email = usuarioLogado();
	  
	  $duracao = $_POST['addDuracao'];
	  $assistido = $_POST['addAssistido'];
	  
	 
	  
	  
	  adicionaHoraFilmeAssistido($conexao, $duracao, $email);
	  adicionaFilmeAssistido($conexao, $assistido, $email);
	 
	 header("Location:profile.php");
	 die();