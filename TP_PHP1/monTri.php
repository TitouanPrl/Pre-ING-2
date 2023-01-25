<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le Titre</title>
    </head>
    <body>
      <?php
      function initialiser($taille){
        $tab = array();
        for ($i=0; $i < $taille; $i++) {
          $nb = rand(0, 100);
          $tab[$i] = $nb;
        }
        return $tab;
      }

      $testTab = initialiser(30);
      var_dump ($testTab);
       ?>

       <table>
         <tr>
           <th>Tab</th>
           <th>Tab Trié</th>
         </tr>
      <?php
        function swap($tab, $nb1, $nb2){
          $tmp = $tab[$nb1];
          $tab[$nb1] = $tab[$nb2];
          $tab[$nb2] = $tmp;

          return $tab;
        }

        function triBulle($tab, $taille){
          $cpt = true;
          while ($cpt) {
            $cpt = false;
            for ($i=0; $i < $taille-1; $i++) {
              if ($tab[$i] > $tab[$i+1]) {
                $tab = swap($tab, $i, $i+1);
                $cpt = true;
              }
            }
          }
          return $tab;
        }

        $tabTrie = triBulle($testTab, count($testTab));

         for ($i=0; $i < count($testTab); $i++) {
           echo "<tr>";
           echo "<td>".$testTab[$i]."</td>";
           echo "<td>".$tabTrie[$i]."</td>";
           echo "</tr>";
         }


      ?>
    </body>
</html>
