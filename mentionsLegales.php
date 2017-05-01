<?php
		// On démarre la session AVANT d'écrire du code HTML
		session_start();

		// On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
		//include 'view/includes/retourEnForce.php';

		include 'view/includes/avant_header.php';
?>
	<title>Détail du stage</title>
</head>

<?php 
	// On inclue le menu et la connexion à la page
	include 'view/includes/header.php';
?>

<div class="container">
		<div id="content">
			<div align="center">
				<h2><u>MENTIONS LEGALES</u></h2>
			</div>
			<br>
			<p>
				Le site Internet <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a> est une œuvre de l’esprit protégée par les lois de la propriété intellectuelle. Le site et chacun des éléments qui le composent sont la propriété exclusive de <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a>.
				<br /><br /><br />
				Toute reproduction ou représentation, intégrale ou partielle, du site ou quelconque élément qui le compose, est interdite de même que leur altération.
				Les marques et noms de domaine qui apparaissent sur le site Internet <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a> sont la propriété exclusive de <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a>.
				<br /><br /><br />
				Toute reproduction ou utilisation de ces marques ou noms de domaine, de quelque manière et à quelque titre que ce soit, est interdite.
				<br /><br /><br />
				La création de liens hypertextes vers le site Internet de ne peut être faite qu’avec l’autorisation écrite et préalable de <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a>.
				<br /><br /><br />
				<a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a>, n’assure aucune garantie, expresse ou tacite, concernant tout ou partie de son site Internet.
				<br /><br /><br />
				En aucun cas, <a href="http://gestion_des_stages.fr/">http://gestion_des_stages.fr/</a> ne peut être tenue pour responsable d’un quelconque dommage direct ou indirect, quelle qu’en soit la nature, découlant de l’utilisation de son site Internet.
				<br /><br /><br />
				DIRECTEUR DE LA PUBLICATION : 
				<br /><br /><br />
				M. Revello - Directeur du Lycée Saint-Vincent
				03 44 53 96 40
				30 rue de Meaux
				60 300  Senlis
				<br /><br /><br />
				Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d’un droit d’accès et de rectification aux informations vous concernant. Pour cela, il suffit de nous en faire la demande par courrier électronique ou par courrier en nous indiquant votre nom, prénom et adresse.
				<br /><br /><br />
				La demande par courrier est à faire à l'adresse suivante :
				Lycée Saint-Vincent 
				30 rue de Meaux
				60 300  Senlis
			</p>

			<?php
		      	include 'view/includes/footer.php';
		    ?>
		</div>
</div>