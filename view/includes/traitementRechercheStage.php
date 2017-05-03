<?php
	if(isset($_GET["rechercheEleve"]))
	{
		if(isset($_GET["classe"]))
		{
			$_SESSION['idClasse'] = $_GET["classe"];
		}
		if(isset($_GET["eleve"]))
		{
			$_SESSION['idEleve'] = $_GET["eleve"];
		}
	}
?>