<?php 
	$host = $_SERVER['SERVER_ADDR'] == "::1" ? "localhost" : "::1";
	try {
		$pdo = new PDO("mysql:host=$host;dbname=teste", 'root', '');
		$pdo -> exec("set names utf8");
	} catch (PDOException $e) {
		die("Erro ao Conectar !!!");
	}
?>
