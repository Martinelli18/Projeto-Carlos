<?php 
	include("banco-filme.php");
	include("conecta.php");

	$categoria=$_POST['categoria'];

	if(insereCategoria($conexao,$categoria)){

		echo "Categoria Adicionada";
	} else {
		echo "Categoria não adicionada";
	}

	