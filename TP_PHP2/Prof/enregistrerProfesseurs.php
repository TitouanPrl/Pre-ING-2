<?php
  $file = fopen("infoProfesseurs.csv","a");
  if (!filesize("infoProfesseurs.csv")) {     /*Si le fichier est vide on ajoute l'ent*/
    fputcsv($file, array("nom", "prenom", "matiere", "login", "mdp"), ";");
  }
  fputcsv($file, array($_POST["nom"], $_POST["prenom"], $_POST["matiere"], $_POST["login"], md5($_POST['mdp'])), ";");   /*Ajout des infos*/
  fclose($file);

  echo "Le professeur ".$_POST["prenom"]." ".$_POST["nom"]." a bien été enregistré !";
  echo "<br> pour rajouter une autre élève => <a href='inscriptionProfesseurs.php'> ICI </a>";
  echo "<br> retour à la connexion => <a href='../Connexion/connexion.php'> ICI </a>";
 ?>
