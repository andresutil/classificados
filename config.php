<?php
session_start();

global $pdo;
try{
	$pdo = new PDO("mysql:dbname=classificados;host:localhost", "root", "asg1507");
}catch(PDOException $e){
	echo "FALHOU: ".$e->getMessage();
	exit;
}
?>