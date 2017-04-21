<?php
	if(isset($_GET["rechercheEleve"]))
	{

		if(isset($_GET["classe"]))
		{
			$resultatClasse = $_GET["classe"];
		}

		if(isset($_GET["eleve"]))
		{
			$resultatEleve = $_GET["eleve"];
		}
	}
?>