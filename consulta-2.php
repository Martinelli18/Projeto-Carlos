<?php include("cabecalho-2.php");
	include("conecta.php");
	include("banco-filme.php");
	

?>
	<!-- First Grid 
<div class="w3-row-padding w3-padding-64 w3-container w3-light-grey">
  <div class="w3-content-block">
	<form method="get" class="w3-card" action="busca.php">
		<table class="w3-table">
			<tr>
				
				<th>Tags:</th>
			</tr>
			<tr>
				
				
				<td><textarea name="tags" class="w3-label w3-block"></textarea></td>
				
			</tr>
		</table>
		<button class="w3-btn-block w3-red" type="submit" value="submit">Pesquisar</button>
	</form>
    </div>
  </div>
  -->
<div class="w3-row-padding w3-padding-64 w3-container w3-red">
	
		<?php
			$filmes = listaFilme($conexao);
			foreach($filmes as $filme):
		?>
				
			<a href="pagina-titulo.php?id_filme=<?=$filme['id_filme']?>"><img src="<?=$filme['imagem']?>" class="w3-round w3-hover-opacity" height="300" width="200"></a> <!-- Mostra poster do titulo -->
			
		<?php
			endforeach
		?>
	
</div>
</div> <!-- nao sei pq, mas esse div precisa existir -->
<?php 
include("rodape.php");
?>