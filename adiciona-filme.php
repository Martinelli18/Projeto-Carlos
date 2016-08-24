<?php
include("cabecalho-2.php");
include("banco-filme.php");
include("conecta.php");

$titulo = $_POST["titulo"];
$ano = $_POST["ano"];
$duracao = $_POST["duracao"];
$descricao = $_POST["descricao"];
$imagem = $_POST["imagem"];


if(insereFilme($conexao, $titulo, $ano, $duracao, $descricao, $imagem)){
	?>
	<div class="w3-container w3-green">
		<h3>Sucesso</h3>
		<p>Filme adicionado com sucesso.</p>
		</div>
<?php
} else {
	?>
	<div class="w3-container w3-red w3-padding-64" >
  <h3>Erro!</h3>
  <p>Filme não adicionado.</p>
</div>	
	<?php } ?>
<?php include("rodape.php")?>