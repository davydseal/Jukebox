<?php

$hostname  = "localhost";
$bancodedados = "jukebox";
$usuario = "root";
$senha = "";
$table_pessoa = "pessoa";
$table_livro= "livro";




$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
	echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 

//else
//echo "conectado!";