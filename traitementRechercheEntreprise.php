<?php
	if(isset($_GET['rechercheEntreprise']))
	{
		if(isset($_GET['entrepriseExistante']))
		{
			$_SESSION['idEntreprise'] = $_GET['entrepriseExistante'];
		}
	}
?>