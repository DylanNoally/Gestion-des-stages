  <?php
    session_start();
    include 'view/includes/header.php';
  ?>

  	<h1>Dupont Jean-Marc</h1>
  	<br>
  	Informations
  	<br>
  	nom : <input type="text" name="nom" value="" />
  	Prénom : <input type="text" name="prenom" value="" />
  	<br>
  	Téléphone : <input type="text" name="prenom" value="" />
  	Email : <input type="text" name="prenom" value="" />
  	<br>
  	Adresse postale : <textarea name="Adresse" rows=4 cols=40>Adresse</textarea>
  	Année obtention BAC : <input type="text" name="AnneeBac" value="" />
  	<br>
  	Type BAC : <input type="text" name="TypeBac" value="" />
  	<br>
  	<input type="submit" name="editer" value="Editer">
  	<br>
  	Historique des classes
  	<br>
  	<table>
	    <tr>
	       <th>Année</th>
	       <th>Classe</th>
	       <th>Action</th>
	    </tr>
	    <tr>
	       <td>2016/2017</td>
	       <td>BTS2</td>
	       <td>Voir les stages</td>
	    </tr>
	    <tr>
	       <td>2015/2016</td>
	       <td>BTS1</td>
	       <td>Voir les stages</td>
	    </tr>
    </table>