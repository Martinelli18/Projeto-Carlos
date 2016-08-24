<?php include("cabecalho-2.php");
	
	
?>
	<form  action="adiciona-filme.php"  method="post">
	<h1> Cadastros</h1>
		<table class="table">
			<tr>
				<td>Titulo:</td>
				<td><input class="w3-input w3-border" type="text" name="titulo"></td>
			</tr>
			<tr>
				<td>Ano:</td>
				<td><input  class="w3-input w3-border" type="number" name="ano"></td>
			</tr>
			<tr>
				<td>Duração:</td>
				<td><input  class="w3-input w3-border" type="number" name="duracao"></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><input class="w3-input w3-border" type="text" name="descricao"></textarea>
			</td>
			<tr>
				<td>Imagem:</td>
				<td><input class="w3-input w3-border" type="text" name="imagem"></textarea>
			</td>
			<tr>
				<td><button class="w3-btn w3-red" type="submit" value="cadastrar">Cadastrar</button></td>
			</tr>
		<table>
	</form>

<?php include("rodape.php")?>