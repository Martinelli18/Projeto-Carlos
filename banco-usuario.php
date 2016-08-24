<?php 
	function buscaUsuario($conexao,$email,$senha){
		$senhaMD5= md5($senha);
		$query = "select * from usuarios where email='{$email}' and senha='{$senhaMD5}'";
		$resultado = mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	
		
	}
	
	function adicionaHoraFilmeAssistido($conexao, $duracao, $email){
	$query = "update usuarios set horasAssistidas= (horasAssistidas+({$duracao})) where id = '{$email}'";
	return (mysqli_query($conexao,$query));
	}
	
	function adicionaFilmeAssistido($conexao,$assistido,$email){
	$query = "insert into usuario_assistidos (usuario,filme) values ('{$email}', '{$assistido}')";
	return (mysqli_query($conexao,$query));
	}
	
	function dadosUsuario($conexao, $email){
		$dados = mysqli_query($conexao, "select * from usuarios where email='{$email}'");
		return mysqli_fetch_assoc($dados);
		
	}
	
	function adicionaUsuario($conexao,$nome,$email,$senha){
		$senhaMD5=md5($senha);
		$query = "insert into usuarios (nome, email, senha) values ('{$nome}','{$email}','{$senhaMD5}')";
		return mysqli_query($conexao,$query);
		
	}