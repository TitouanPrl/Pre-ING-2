
<?php
  $mesCoefs = json_decode($_POST["coefs"], false);
  $x1 = 0;
  $x2 = 0;
  $tab = array();

  foreach ($mesCoefs as $name => $value) {
    $tab[$name] = intval($value);     //Convertit en entier le nb et le stock dans un tableau
  }

  $delta = pow($tab[b], 2) - 4*$tab[a]*$tab[c];

  if ($delta < 0) {
    echo "Il n'y a pas de solutions dans R";
  }

  elseif ($delta == 0) {
    $x1 = -$tab[b] / (2*$tab[a]);
    echo "Il y a une solutions : x0 = $x1";
  }

  else {
    $x1 = (-$tab[b] + sqrt($delta) / (2*$tab[a]));
    $x2 = (-$tab[b] - sqrt($delta) / (2*$tab[a]));
    echo "Il y a deux solutions : x1 = $x1 et x2 = $x2";
  }
 ?>
