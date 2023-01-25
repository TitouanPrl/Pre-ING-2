<?php
  $login = array(
    "HarryDu93",
    "HermioneDu64",
    "RonDu33"
  );

  $mdp = array(
    "giny<3",
    "pattenrond",
    "tfcForEver"
  );
  $test = true;
  for ($i=0; $i < 3; $i++) {
    echo "$login[$i] $mdp[$i]";
    if (($_POST["login"] == $login[$i]) && ($_POST["mdp"] == $mdp[$i])) {
      header('Location: accueil.php?login='.$_POST["login"]);
      $test = false;
    }
  }
  if($test) header('Location: connexion.html');
 ?>
