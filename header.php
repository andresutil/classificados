<?php require 'config.php';?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Classificados</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="./" class="navbar-brand">Classificados</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
				<li><a href="meus-anuncios.php">Meus Anuncios</li>
				<li><a href="sair.php">Sair</li>
			<?php else: ?>
				<li><a href="cadastre-se.php">Cadastre-se</li>
				<li><a href="login.php">Login</li>
			<?php endif;?>
			</ul>
			
		</div>
	</nav>