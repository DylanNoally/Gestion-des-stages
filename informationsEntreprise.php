  <?php
    session_start();
    include 'view/includes/header.php';
    require 'traitementRechercheEntreprise.php';

    $query = $bdd->prepare('SELECT Id_entreprise, Nom_entreprise FROM entreprise');
    $query->execute();
    $results=$query->fetchAll();
  ?>

  	<h2><?php if(key_exists('idEntreprise',$_SESSION)) 
      foreach ($results as $rechercheEntreprise) 
      {
          if($_SESSION['idEntreprise'] == $rechercheEntreprise['Id_entreprise'])
          {
            $_SESSION['nomEntreprise'] = $rechercheEntreprise['Nom_entreprise'];
            echo $_SESSION['nomEntreprise'];
          }
      }
    ?>
    </h2>

    <!-- Il manque le compteur qui permet de totaliser le nombre de stage affecté à l'entreprise -->

  	<br>
  	Information de l'entreprise
  	<br>
  	Nomde l'entreprise : <input type="text" name="entreprise" value="" />
  	<br>
  	Type d'entreprise : <input type="text" name="TypeEntreprise" value="" />
  	<br>
  	Chiffre d'affaires : <input type="text" name="CA" value="" />
  	<br>
  	Adresse postale : <textarea name="Adresse" rows=4 cols=40>Adresse</textarea>
  	<br>
  	N° Téléphone : <input type="text" name="telephone" value="" />
  	<br>
  	Resp. Technique : <input type="text" name="RespTechnique" value="" />
  	<br>
  	Historique des stages
  	<br>
  	<table>
	  <tr>
	     <th>Année</th>
	     <th>Éléve</th>
	     <th>Réferent pédagogique</th>
	     <th>Réferent pédagogique</th>
	     <th>Réferent professionnel</th>
	     <th>Action</th>
	  </tr>
	  <tr>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
      </tr>
	  <tr>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	  </tr>
    </table>