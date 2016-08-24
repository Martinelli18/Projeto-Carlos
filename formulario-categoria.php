<?php include("cabecalho-2.php"); ?>

<div class="w3-padding-64">
<form action="adiciona-categoria.php" method="post">
	<table class="table">
		<tr>
			<td><h3>Categoria</h3></td>
			<td><input class="w3-border w3-input" type="text" name="categoria"></td></tr>
		<tr><td><a class="w3-btn" href="pagina-adicao.php">Voltar</a>    	<button class="w3-btn w3-red" type="submit" value="cadastrar">Adicionar Categoria</button></td></tr>
	</table>
</form>
</div>
<?php include("rodape.php");?>