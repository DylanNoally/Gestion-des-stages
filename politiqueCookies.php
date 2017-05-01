<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Polotique des Cookies</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div align="center">
				<h2><u>POLITIQUE DES COOKIES</u></h2>
			</div>
				<div style="margin-top: 60px; margin-bottom: 426px;">
				<p> Les cookies sont de petits fichiers textes stockés sur votre ordinateur par les sites que vous visitez. Ils sont largement utilisés pour faire fonctionner les sites web et distinguer les utilisateurs uniques et leur méthode d'utilisation du site. Les données recueillies sont anonymes et ne contiennent aucune information personnelle.</p>
				<p> Les cookies de session sont utilisés sur le site Grundig pour assurer le fonctionnement de certains éléments du site comme les pages « récemment vues » et les « comparaisons de produits ». Un cookie de session ne dure que le temps d'une visite sur le site.</p>
				<p> Si vous préférez ne pas accepter les cookies, vous pouvez les désactiver en modifiant les paramètres du navigateur web de votre ordinateur ou appareil mobile.</p>
				<p> En cliquant sur accepter, vous acceptez la sauvegarde de cookies sur votre ordinateur. Si vous choisissez de désactiver nos cookies, vous ne pourrez pas bénéficier de toutes les fonctionnalités du site.</p>
				</div>

				<?php
			      	include 'view/includes/footer.php';
			    ?>
		</div>
</div>
