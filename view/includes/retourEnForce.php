<?php
// Si le login existe --> utilsateur va sur la bonne page
// Si existe pas --> forcer ustilsateur à aller à la page acueil(index.php)
// Le code sera à part et sera inséré à l'aide de "include"


// Si la clé "login" de la variable "$_SESSION" existe (donc préscence de valeur dans la clé : "l'utilisateur est connecté")
if (key_exists('login', $_SESSION))
{
	// Si l'utilisateur est connecté, il sera sur cette page
}
else
{
	// Si l'utilisateur n'est pas connecté, il sera renvoyer à la page d'acceuil ("index.php")
	?>
	<script type="text/javascript"> 
		alert("Veuillez vous connecter !");
		window.location.replace("../projet/index.php"); 
	</script> 
	<?php
}
?>
