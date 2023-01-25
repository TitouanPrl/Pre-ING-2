<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription Professeur</title>
    </head>
    <body>
      <form id="monForm" name="monForm" action="enregistrerProfesseurs.php" method="POST">
        <fieldset>
          <legend>Inscription</legend>
          <label>Nom</label> <input type="text" id="nom" name="nom" required="required"> <br>
          <label>Prénom</label> <input type="text" id="prenom" name="prenom" required="required"> <br>
          <label>Matière</label> <input type="text" id="matiere" name="matiere" required="required"> <br>
          <label>Pseudo</label> <input type="text" id="login" name="login" required="required"> <br>
          <label>Mot de passe</label> <input type="password" id="mdp" name="mdp" required="required"> <br>
        </fieldset>
        <input type="submit" id="submit" name="submit" value="Valider">
       </form>
    </body>
</html>
