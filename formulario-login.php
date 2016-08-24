<?php include("cabecalho-2.php");
	  include("conecta.php");
?>

<div class="w3-row">
	<!-- Login -->
	
	<div class="w3-card w3-padding-64 w3-margin-top w3-margin w3-padding-jumbo w3-quarter" style="width:30%">
	<h3>Login:</h3>
		<form class="w3-container" action="login.php" method="post">
			<label>Usuario:</label class="w3-label"><input class="w3-input w3-block w3-margin-rigth " type="text" name="email" id="email"><br>
			<label>Senha:</label class="w3-label"><input class="w3-input w3-margin-rigth"  type="password" name="senha" id="senha"><br>
			<button class="w3-btn w3-red">Login</button>
		</form>
	</div>	
	<!-- cadastro -->
	<div class="w3-card w3-padding-64 w3-margin-top w3-margin w3-padding-jumbo w3-col s3" style="width:30%">
	<h3>Criar Conta:</h3>
		<form class="w3-container" action="criar-conta.php" method="post">
			<label>Nome:</label class="w3-label"><input class="w3-input w3-block w3-margin-rigth " type="text" name="nome" id="nome"><br>
			<label>E-mail:</label class="w3-label"><input class="w3-input w3-block w3-margin-rigth " type="text" name="email" id="email"><br>
			<label>Senha:</label class="w3-label"><input class="w3-input w3-margin-rigth"  type="password" name="senha" id="senha"><br>
			<button class="w3-btn w3-red" type="submit">Cadastrar</button>
		</form>
	</div>
	
</div>
<?php include("rodape.php");
?>