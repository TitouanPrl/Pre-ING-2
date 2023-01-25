<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mediathèque</title>
  </head>
  <body>
    <h1>Mes DVDs</h1>
    <div id="films">
      <table id="media">
        <tr>
          <th>Titre</th>
          <th>Realisateur</th>
          <th>Date de réalisation</th>
          <th>Durée</th>
        </tr>

      <?php
      $array = file_get_contents("mediatheque.json");
      $mediatheque = json_decode($array, true);

      foreach ($mediatheque as $key => $value) {
        echo "<tr>";
        foreach ($value as $key => $WLHJPP) {
          echo "<td>".$WLHJPP."</td>";
        }
        echo "</tr>";
      }
       ?>
       </table>
    </div>
    <br>
    <br>
    <h1>Ajouter un film</h1>
    Titre <input type="text" id="titre"> <br><br>
    Réalisateur <input type="text" id="real"> <br><br>
    Date de réalisation <input type="number" id="date"> <br><br>
    Durée <input type="number" id="duree"> <br><br>

    <button type="button" onclick="ajout()">Ajouter</button>

  </body>
</html>

<script>
  function ajout(){
    titre = document.getElementById('titre').value;
    realisateur = document.getElementById('real').value;
    date = document.getElementById('date').value;
    duree = document.getElementById('duree').value;

    mesInfos = {"titre":titre, "realisateur":realisateur, "annee de realisation":date, "duree":duree};
    mesParams = JSON.stringify(mesInfos);

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        //ON AJOUTE LE NOUVEAU FILM A LA MANO POUR L'AFFICHAGE LORS DE L'AJOUT

        //Création d ' une ligne
        tr = document.createElement('tr');

        //Création de 4colonnes
        tr.appendChild(document.createElement('td'));
        tr.appendChild(document.createElement('td'));
        tr.appendChild(document.createElement('td'));
        tr.appendChild(document.createElement('td'));

        //Remplir les colonnes
        tr.cells[0].appendChild(document.createTextNode(titre));
        tr.cells[1].appendChild(document.createTextNode(realisateur));
        tr.cells[2].appendChild(document.createTextNode(date));
        tr.cells[3].appendChild(document.createTextNode(duree));

        //Récupération du tableau dont l'id est media
        element = document.getElementById("media");

        //Ajout de la ligne contenant les colonnes à l'élément dont l'id est media
        element.appendChild(tr);

      }
    };

    xhttp.open("POST", "ajouter.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("infos="+mesParams);
  }
</script>
