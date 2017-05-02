   <?php
    session_start();
    include 'view/includes/header.php';
  ?>
<div class='container'>
  <div id='content'>
    <div class='left'>
      <h1>Suivi de scolarité</h1>
      <br>
      Rechercher une classe: 
      <a href="nouvelleClasse.php"><input type="submit" name="ajoutClasse" value="Ajouter une Classe"/></a>
      <br>
      <?php
        //preparation de la requete SQL suivante: afficher toutes les années
        $extraireClasse = $bdd->prepare('SELECT * FROM classe');

        //Execution de la requete
        $extraireClasse->execute();
        $lesClasses = $extraireClasse->fetchAll();
      ?>

      <form method="get" action="classe.php">
        <p>
          <label for="la_classe">Nom de la classe :</label><br>

          <select name="la_classe" id="la_classe">
            <?php foreach ($lesClasses as $laClasse) {
            ?>
              <option value=<?php echo $laClasse['Nom_classe']; ?> ><?php echo $laClasse['Nom_classe']; ?></option>
            <?php
            }
            ?>
          </select>
        </p>
          <a href="classe.php"><input type="submit" value="Rechercher"/></a>
      </form>




      <br>
      
      <br><br>
      Rechercher un élève :
      <a href="nouvelEleve.php"><input type="submit" name="ajoutClasse" value="Ajouter un Elève"/></a>
      <br>
      <?php
        //preparation de la requete SQL suivante: afficher toutes les années
        $extraireEleve = $bdd->prepare('SELECT Nom_etudiant , Prenom_etudiant FROM etudiant');

        //Execution de la requete
        $extraireEleve->execute();
        $lesEleves = $extraireEleve->fetchAll();
      ?>

      <form method="get" action="eleve.php">
        <p>
          <label for="leleve">Nom de l'éleve :</label><br>

          <select name="leleve" id="leleve">
            <?php foreach ($lesEleves as $leleve) {
            ?>
              <option value=<?php echo $leleve['Nom_etudiant']; ?> ><?php echo $leleve['Nom_etudiant'].' '.$leleve['Prenom_etudiant']; ?></option>
            <?php
            }
            ?>
          </select>
        </p>
          <a href="eleve.php"><input type="submit" value="Rechercher" /></a>
      </form>

    </div>
  </div>
</div>
