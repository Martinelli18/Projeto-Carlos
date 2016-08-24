<?php include("cabecalho-2.php");
	 include("banco-usuario.php");
	 include("conecta.php");
	 
	 
	 
	if(!usuarioEstaLogado()){
		header('Location: index.php');
	die();}

	 $email=usuarioLogado();
	 
	$dados=dadosUsuario($conexao, $email);
	?>
	
	
	<div class="w3-padding-128">
		<h3> <?=$dados['nome']?>, você ja assistiu <?=$dados['horasAssistidas']?> minutos<h3>
	</div>
	
	
<div class="w3-padding-128">
<a href="logout.php">LOGOUT</a>
</div>

	
<?php include("rodape.php");?>