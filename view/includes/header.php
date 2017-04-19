<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="public/css/os.css">
	<link rel="stylesheet" href="public/css/stylesheet.css" type="text/css" charset="utf-8" />
	<title>Acceuil</title>
</head>

<body>
	<div class="header-top">
		<img src="public/img/logo.png" alt="Lycée Saint Vincent">
	</div>
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1>Gestion des stages</h1>
			</div>
				<?php
					// On inclue le menu
					include 'view/includes/menugauche.php';

					// On inclue la connexion à la page
					include 'view/includes/menudroit.php';

					// On inclue la connexion à la base de données
					include 'view/includes/connexionBD.php';
				?>
		</div>
	</div>


