<?php
	include("conecta.php");
	include("banco-usuario.php");
	include("logica-usuario.php");
	
	
		logout();
	header("Location: index.php");
	
	die();
	