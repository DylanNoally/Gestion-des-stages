  <?php
    session_start();
    include 'view/includes/header.php';
  ?>

    <h1>Suivi de scolarité</h1>
    <br>
    Rechercher une classe: 
    <a href="2.1.3.php"><input type="submit" name="ajoutClasse" value="Ajouter une Classe"/></a>
    <br>
    Nom de la classe : 
    <select name="Classe">
      <option value="BTS1">BTS1</option>
      <option value="BTS2">BTS2</option>
    </select>
    <br>
    <a href="2.2.3.php"><input type="submit" name="recherche" value="rechercher"/></a>
    <br><br>
    Rechercher un élève :
    <a href="2.2.3.php"><input type="submit" name="ajoutClasse" value="Ajouter un Elève"/></a>
    <select name="annee">
      <option value="Dupont Gérard">Dupont Gérard</option>
    </select>
    <br>
    <input type="submit" name="recherche" value="rechercher"/>