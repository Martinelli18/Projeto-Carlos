<?php

function insereFilme($conexao, $titulo, $ano, $duracao,  $descricao, $imagem){
	$query = "insert into catalogo_filme (titulo, ano, duracao, descricao, imagem) values ('{$titulo}', {$ano},{$duracao},'{$descricao}','{$imagem}')";
	$resultadoDaInsercao = mysqli_query($conexao,$query);
	return $resultadoDaInsercao;
	}
	
	
function listaFilme($conexao){
		$filmes = array();		
		$resultado = mysqli_query($conexao,"select * from catalogo_filme");
	
		while($filme = mysqli_fetch_assoc($resultado)){
			array_push($filmes, $filme);
		}
			return $filmes;
	}
		
	function buscaFilme($conexao,$busca){
		$filmes = array();
		$query= mysqli_query($conexao,"select * from catalogo_filme where (titulo LIKE '%{$busca}%') OR (tags LIKE '%{$busca}%') OR (descricao LIKE '%{$busca}%')");
		
		while($filme = mysqli_fetch_assoc($query)){
			array_push($filmes, $filme);
			}
		  return $filmes;
	  }

function insereTag($conexao,$tag){
	$query = "insert into tags (tag) values ('{$tag}')";
	$resultadoDaInsercao = mysqli_query($conexao,$query);
	return $resultadoDaInsercao;
	}

function insereCategoria($conexao,$categoria){
	$query = "insert into categorias (categoria) values ('{$categoria}')";
	$resultadoDaInsercao = mysqli_query($conexao,$query);
	return $resultadoDaInsercao;

}
