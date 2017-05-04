<!-- Inclusion des éléments de la page -->

<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // On include le code permetant d'envoyer l'utilisateur dans la page d'acceuil s'il n'est pas connecté 
    //include 'view/includes/retourEnForce.php';

    include 'view/includes/avant_header.php';
?>
  <title>Recherche classe/étudiant</title>
</head>

<?php 
  // On inclue le menu et la connexion à la page
  include 'view/includes/header.php';
?>

  <div class='container'>
  <div id='content'>
    <!-- Responsive -->
    <div style="float: left;">
      <?php include 'view/includes/responsiveMenuGauche.php'; ?>
    </div>
    <div class='suiviScolarite_corps'>
      <h1 class='suiviScolarite_corps_titre'>Suivi de scolarité</h1>
 
      <h2 class="suiviScolarite_corps_classe_sous_titre">Rechercher une classe: </h2>
      <div class="suiviScolarite_ajoutClasse">
        <a href="nouvelleClasse.php"><input type="submit" name="ajoutClasse" value="Ajouter une Classe"/></a>
      </div>

      <?php
        //preparation de la requete SQL suivante: afficher toutes les années
        $extraireClasse = $bdd->prepare('SELECT * FROM classe ORDER BY Nom_classe');
        //Execution de la requete
        $extraireClasse->execute();
        $lesClasses = $extraireClasse->fetchAll();
      ?>

      <form class="suiviScolarite_classe" method="get" action="classe.php">
        <div class="suiviScolarite_nom_classe">
          <label for="la_classe">Nom de la classe :</label><br>
        </div>

          <div class="suiviScolarite_noms_classes">
          <select name="la_classe" id="la_classe">
            <?php foreach ($lesClasses as $laClasse) {
            ?>
              <option value=<?php echo $laClasse['Nom_classe']; ?> ><?php echo $laClasse['Nom_classe']; ?></option>
            <?php
            }
            ?>
          </select>
          </div>
          <input class="suiviScolarite_class_recherche" type="submit" value="Rechercher"/>
      </form>




 
      <h2 class="suiviScolarite_corps_eleve_sous_titre">Rechercher un élève :</h2>
      <div class="suiviScolarite_ajoutEleve">
        <a href="nouvelEleve.php"><input type="submit" name="ajoutClasse" value="Ajouter un Elève"/></a>
      </div>

      <?php
        //preparation de la requete SQL suivante: afficher toutes les années
        $extraireEleve = $bdd->prepare('SELECT Nom_etudiant , Prenom_etudiant FROM etudiant ORDER BY Nom_etudiant');
        //Execution de la requete
        $extraireEleve->execute();
        $lesEleves = $extraireEleve->fetchAll();
      ?>

      <form class="suiviScolarite_eleve" method="get" action="eleve.php">
        <div class="suiviScolarite_nom_eleve">
          <label for="leleve">Nom de l'éleve :</label><br>
        </div>

          <select class="suiviScolarite_noms_eleves" name="leleve" id="leleve">
            <?php foreach ($lesEleves as $leleve) {
            ?>
              <option value=<?php echo $leleve['Nom_etudiant']; ?> ><?php echo $leleve['Nom_etudiant'].' '.$leleve['Prenom_etudiant']; ?></option>
            <?php
            }
            ?>
          </select>
          <input class="suiviScolarite_eleve_recherche" type="submit" value="Rechercher" />
      </form>

    </div>
    <?php 
      // On inclue le footer à la page
      include 'view/includes/footer.php';
    ?>
  </div>
</div>





