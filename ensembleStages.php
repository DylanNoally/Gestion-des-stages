 <?php
    session_start();
    include 'view/includes/header.php';
    require 'traitementRechercheStage.php';

    $query = $bdd->prepare('SELECT Id_classe, Nom_classe FROM classe');
    $query->execute();
    $results=$query->fetchAll();

    $query2 = $bdd->prepare('SELECT Nom_etudiant, Prenom_etudiant, Id_etudiant FROM etudiant');
    $query2->execute();
    $results2=$query2->fetchAll();

  ?>
<div class="container">
        <div id="content">
        <form action="add_stage.php" method="GET" >
          <h2><?php if(key_exists('idClasse',$_SESSION) && key_exists('idEleve',$_SESSION)) 
          /* Si le resultat du formulaire concernant la valeur de la classe choisie
          est correct, alors on recherche à partir de celle-ci le nom de la classe associé et on l'affiche */
                    { 
                        foreach ($results2 as $recherche2) 
                        {
                            if($_SESSION['idEleve'] == $recherche2['Id_etudiant'])
                            {
                                $_SESSION['nomEleve'] = $recherche2['Prenom_etudiant']." ".$recherche2['Nom_etudiant']." - ";
                                echo $_SESSION['nomEleve'];
                            }
                        }
                        foreach ($results as $recherche)
                        {
                            if($_SESSION['idClasse'] == $recherche['Id_classe'])
                            {
                                $_SESSION['nomClasse'] = $recherche['Nom_classe'];
                                echo $_SESSION['nomClasse'];
                            }
                        }
                    } 
                    else 
                    { 
                        echo "Erreur de traitement des informations"; 
                    } 
                    ?>
                       
          </h2>
          <br>
              <div id="Bande">
                <div class="left1">
                   <h3>Historique des stages</h3>
                </div>
                <div class="right1">
                    
                   <input type="submit" name="ajouterUnStage" value="Ajouter un stage">
                    </form>
               </div>
              </div>
              <br> 
            <table border class="table11">
                <thead> <!-- En-tête du tableau -->
                    <tr>
                        <th>Année</th>
                        <th>Entreprise</th>
                        <th>Référent pédagogique</th>
                        <th>Référent professionnel</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody> <!-- Corps du tableau -->
                  <tr>
                    <td><?php 
                                        $query = $bdd->prepare('SELECT Annee FROM annee WHERE Id_date_annee =2');
                                        $query->execute();
                                        while ($results = $query->fetch())
                                        {
                                            echo $results['Annee'];
                                        } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_entreprise FROM entreprise WHERE Id_entreprise =2');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_entreprise'];
                                         } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_referent_peda FROM referent_peda WHERE Id_referent_peda =1');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_referent_peda'];
                                         } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_referent_pro FROM referent_pro WHERE Id_referent_pro =1');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_referent_pro'];
                                         } 
                    ?></td>
                    <td><a href="detail_stage.php">Voir détails</td>
                  </tr>
                  <tr>
                    <td><?php $query = $bdd->prepare('SELECT Annee FROM annee WHERE Id_date_annee =1');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Annee'];
                                         } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_entreprise FROM entreprise WHERE Id_entreprise =1');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_entreprise'];
                                         } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_referent_peda FROM referent_peda WHERE Id_referent_peda =1');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_referent_peda'];
                                         } 
                    ?></td>
                    <td><?php $query = $bdd->prepare('SELECT Nom_referent_pro FROM referent_pro WHERE Id_referent_pro =2');
                                         $query->execute();
                                         while ($results = $query->fetch())
                                         {
                                         echo $results['Nom_referent_pro'];
                                         } 
                    ?></td>
                    <td><a href="detail_stage.php">Voir détails</td>
                  </tr>
                </tbody>

            </table>