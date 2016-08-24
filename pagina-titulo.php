<?php 
	include("cabecalho-2.php");
	include("conecta.php");
	include("banco-filme.php");
	
	$id_filme=$_GET['id_filme'];


?>
	
	<?php
			$sql = mysqli_query($conexao,"select * from catalogo_filme where id_filme = '{$id_filme}'");
			$filmea = mysqli_fetch_assoc($sql);
		?>
	<div class="w3-row-padding w3-padding-64 w3-container w3-light-grey">
		<div class="w3-row">
		
			<div class="w3-col s3 w3-center">
				<img src="<?=$filmea['imagem']?>" class="w3-round" height="400" width="300">
			</div>
			<div class="w3-col s9 w3-red w3-rigth w3-padding-64">
				<table class="w3-table w3-bordered w3-striped w3-border-black">
		
					<li>Titulo: <?=$filmea['titulo']?></li>
					<li>Ano:<?=$filmea['ano']?></li>
					<li>Duração:<?=$filmea['duracao']?> Minutos</li>
					<!--<li>Genero:<?=$filmea['genero']?></li>-->
					<li>Descrição:<?=$filmea['descricao']?></li>
					<!--<li>Tags:<?=$filmea['tags']?></li>-->
		
				</table>
				<?php if(usuarioEstaLogado()){?>
				<div>
					<form method="post" action="adiciona-assistido.php">	
						<input type="hidden" name="addDuracao" value="<?=$filmea['duracao']?>">
						<input type="hidden" name="addAssistido" value="<?= $filmea['id_filme']?>">
						<button class="w3-btn-block w3-green">Adicionar aos assistidos</button>
					<form>
				
				<?php } ?>
				</div>
			</div>
		
		</div>
		
	</div>
		<div>
			<h2>propaganda</h2>
		</div>
		
		<!--mais dados sobre o filme-->
<? include("rodape.php");
?>