<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le Titre</title>
    </head>
    <body>
      <?php
        date_default_timezone_set('UTC+1');
        $date = date('l jS \of F Y');
        $heure = date("h:i:s");

        echo "Bonjour tout le monde, nous sommes le $date et il est $heure";
        $joueurs = array(
                    0=> array("Giroud","Olivier","30/09/1986","Attaquant"),
                    1=> array("Griezman","Antoine","21/03/1991","Attaquant"),
                    2=> array("MBappe","Kylian","20/11/1998","Attaquant"),
                    3=> array("Kante","N'Golo","28/03/1991","Milieu"),
                    4=> array("Umtiti","Samuel","14/09/1993", "Défense"),
                    5=> array("Lloris","Hugo","26/12/1986","Gardien")
                  );
        //var_dump($joueurs);
        ?>
        <table>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Poste</th>
            <th>Age</th>
          </tr>
          <?php
            foreach ($joueurs as $key => $value) {
              echo "<tr>";
              for ($i=0; $i < 4; $i++) {
                echo "<td>".$value[$i]."</td>";
              }
              $res = calculAge($value[2]);
              echo "<td>".$res."</td>";
              echo "</tr>";
            }
           ?>

           <?php
             function calculAge($naissance){
               $an = date('Y');
               $anNaissance = explode("/" , $naissance);    //Sépare la chaine de caractère
               $age = intval($an) - intval($anNaissance[2]);
               return ($age);
             }


            ?>
        </table>
    </body>
</html>
