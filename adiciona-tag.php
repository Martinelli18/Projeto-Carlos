<?php 
	include("banco-filme.php");
	include("conecta.php");

	$tag=$_POST['tag'];

	if(insereTag($conexao,$tag)){

		echo "Tag Adicionada";
	} else {
		echo "Tag não adicionada";
	}

	