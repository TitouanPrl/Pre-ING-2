<?php
  session_start();

  $verif = false;

  $_SESSION["login"] = $_POST["login"];
  $_SESSION["mdp"] = $_POST["mdp"];
  if (!isset($_SESSION["login"])) {   /*On empêche l'utilisateur de se connecter en sautant la page de connexion*/
    header('Location: connexion.php');
    exit();
  }

  //On vérifie si c'est un Prof
  if (($handle = fopen("../Prof/infoProfesseurs.csv", "r")) != FALSE) {
      while ((($data = fgetcsv($handle, 1000, ";")) != FALSE) && !$verif) {
          if ($_POST['login']==$data[3] && md5($_POST['mdp'])==$data[4]){   /*On vérifie que le mdp corresponde bien à celui chiffré*/
               $verif=true;
               echo "Bienvenue ".$data[1]." ". $data[0]." j'enseigne dans la matière suivante : ".$data[2]."<br>";
               echo "Mon pseudo est : ".$data[3];
              fclose($handle);
              echo '<form method="POST" action="connexion.php">';
              echo '<input type="submit" name="OUT" value="Déconnexion">';
              echo '</form>';          }
      }
      fclose($handle);
  }

  //On vérifie si c'est un élève
  if (($handle = fopen("../Eleves/infoEleves.csv", "r")) != FALSE) {
      while ((($data = fgetcsv($handle, 1000, ";")) != FALSE) && !$verif) {
          if ($_POST['login']==$data[5] && md5($_POST['mdp'])==$data[6]){   /*On vérifie que le mdp corresponde bien à celui chiffré*/
               $verif=true;
               echo "Bienvenue ".$data[1]." ". $data[0]." je suis né en : ".$data[2]."<br>";
               echo "j'ai gagné au total : ".$data[4]."<br>";
               echo "Mon pseudo est : ".$data[5];
               fclose($handle);
               echo '<form method="POST" action="connexion.php">';
               echo '<input type="submit" name="OUT" value="Déconnexion">';
               echo '</form>';
          }
      }
      fclose($handle);
  }

  //On vérifie si c'est un Admin
  if (($handle = fopen("infoAdmin.csv", "r")) != FALSE) {
      while ((($data = fgetcsv($handle, 1000, ";")) != FALSE) && !$verif) {
          if ($_POST['login']==$data[2] && $_POST['mdp']==$data[3]){   /*On vérifie que le mdp corresponde bien*/
               $verif=true;
               echo "<h1>Bienvenue ".$data[1]." ". $data[0]."</h1>";
               echo "<i>Your dropped your crown king </i><br><br>";

               //On affiche le csv élève
               echo "<fieldset>";
               echo "<legend>La liste des élèves </legend>";
               echo "<table>";
               $fichier = "../Eleves/infoEleves.csv";
               $fic = fopen($fichier, 'r');
               for ($ligne = fgetcsv($fic, 1024, ";"); !feof($fic); $ligne = fgetcsv($fic, 1024, ";")){
                 echo "<tr>";
                 $j = sizeof($ligne);
                 for ($i=0; $i < $j; $i++) {
                   echo "<td>$ligne[$i]</td>";
                 }
                 echo "</tr>";
               }
               echo "</table><br><br>";
               echo "</fieldset>";
               echo "<br><br>";

               //On affiche le csv prof
               echo "<fieldset>";
               echo "<legend>La liste des professeurs </legend>";
               echo "<table>";
               $fichier = "../Prof/infoProfesseurs.csv";
               $fic = fopen($fichier, 'r');
               for ($ligne = fgetcsv($fic, 1024, ";"); !feof($fic); $ligne = fgetcsv($fic, 1024, ";")){
                 echo "<tr>";
                 $j = sizeof($ligne);
                 for ($i=0; $i < $j; $i++) {
                   echo "<td>$ligne[$i]</td>";
                 }
                 echo "</tr>";
               }
              echo "</table><br><br>";
              echo "</fieldset>";
              echo "<br><br>";

              //Bouton de déconnexion
              echo '<form method="POST" action="connexion.php">';
              echo '<input type="submit" name="OUT" value="Déconnexion">';
              echo '</form>';          }
      }
      fclose($handle);
  }


  if (!$verif){   /*Si le login ou le mdp est faux on renvoit à la page de connexion*/
        header('Location: connexion.php');
  }
  session_destroy();
 ?>
