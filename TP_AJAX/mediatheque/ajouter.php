<?php
   /* Récuperer le contenu du fichier JSON */
   $tab = file_get_contents("mediatheque.json");

   /* Décoder le contenu */
   $array_data = json_decode($tab, true);

   /* Transformer la chaine de caractère en tableau */
   $array_data[] = json_decode($_POST["infos"], false);

   /* Encoder le tableau en json */
   $final_data = json_encode($array_data);

   /* Ajouter les données au fichier json */
 file_put_contents("mediatheque.json", $final_data /*,FILE_APPEND permet d'ajouter au fichier au lieu de remplacer*/);
 ?>
