  <?php
    session_start();
    include 'view/includes/header.php';
  ?>

  	nom : <input type="text" name="nom" value="" />
  	Prénom : <input type="text" name="prenom" value="" />
  	<br>
  	Téléphone : <input type="text" name="prenom" value="" />
  	Email : <input type="text" name="prenom" value="" />
  	<br>
  	Adresse postale : <textarea name="nom" rows=4 cols=40>Adresse</textarea>
  	Année obtention BAC : <input type="text" name="AnneeBac" value="" />
  	<br>
  	Type BAC : <input type="text" name="TypeBac" value="" />
  	<br>
  	<input type="submit" name="Ajouter" value="Ajouter">
  	<br>