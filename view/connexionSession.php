<?php

	if(isset($_POST["formulaireConnexion"]))
	{
		$password_hache = sha1($_POST['motdepasse']);

		if(isset($_POST['pseudonyme']) && isset($password_hache))
		{
			$login = $_POST['pseudonyme'];

			// Je récupère tous les champs login et password de la table CONNEXION
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
			$req = $bdd->prepare('SELECT * FROM connexion');
			$req->execute(array(
			    'login' => $login,
			    'password' => $password_hache));

			$resultat = $req->fetch();

			if (!$resultat)
			{
			    echo 'Mauvais identifiant ou mot de passe !';
			}
			else
			{ 
			    $_SESSION['login'] = $resultat['login'];           // $_POST['pseudonyme'];
			    $_SESSION['mot_de_passe'] = $resultat['password']; // $password_hache;
			}

			if(isset($_POST['pseudonyme']) == $resultat['login'] && isset($password_hache) == $resultat['password'])
			{
    			echo '<script>alert("Mauvais identifiant ou mot de passe !");</script>';
			}
 
		}

		// $maDate = new DateTime();




		// On enregistre les informations de connexion de l'utilisateur
		// $_SESSION['login'] = $_POST['pseudonyme'];
		// $_SESSION['mot_de_passe'] = $_POST['motdepasse'];

		// Il existe une autre fonction qui fait la même chose que date(), mais qui permet en plus de choisir la langue à utiliser : strftime()
		// Définir la langue avec la fonction setlocale.
		setlocale(LC_TIME, 'fra_fra');

		// On utilise strftime() :
		$_SESSION['datetime'] = strftime('%A %d %B %Y à %H:%M');



		// echo strftime('%Y-%m-%d %H:%M:%S');  // 2012-10-11 16:03:04
		// echo strftime('%A %d %B %Y, %H:%M'); // JOUR  NUMEROJOUR  MOIS  ANNEE, HEURE:MINUTES
		// echo strftime('%d %B %Y');           // NUMEROJOUR  MOIS  ANNEE
		// echo strftime('%d/%m/%y');           // JOUR/MOIS/ANNEE

	}
	

?>
	


