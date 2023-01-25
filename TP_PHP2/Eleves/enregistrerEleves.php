<?php
  $file = fopen("infoEleves.csv","a");
  if (!filesize("infoEleves.csv")) {     /*Si le fichier est vide on ajoute l'ent*/
    fputcsv($file, array("nom", "prenom", "date", "adresse", "number", "login", "mdp"), ";");
  }
  fputcsv($file, array($_POST["nom"], $_POST["prenom"], $_POST["date"], $_POST["adresse"], $_POST["pts"], $_POST["login"], md5($_POST["mdp"])), ";");   /*Ajout des infos*/
  fclose($file);

  echo "L'élève ".$_POST["prenom"]." ".$_POST["nom"]." a bien été enregistré !";
  echo "<br> pour rajouter une autre élève => <a href='inscriptionEleves.php'> ICI </a>";
  echo "<br> retour à la connexion => <a href='../Connexion/connexion.php'> ICI </a>";
 ?>
