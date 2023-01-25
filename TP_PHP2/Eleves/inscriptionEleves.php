<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription Eleves</title>
    </head>
    <body>
      <form id="monForm" name="monForm" action="enregistrerEleves.php" method="POST">
        <fieldset>
          <legend>Inscription</legend>
          <label>Nom</label> <input type="text" id="nom" name="nom" required="required"> <br>
          <label>Prénom</label> <input type="text" id="prenom" name="prenom" required="required"> <br>
          <label>Date de naissance</label> <input type="date" id="date" name="date" required="required"> <br>
          <label>Adresse</label> <input type="text" id="adresse" name="adresse" required="required"> <br>
          <label>Total de points</label> <input type="number" id="pts" name="pts" required="required"> <br>
          <label>Pseudo</label> <input type="text" id="login" name="login" required="required"> <br>
          <label>Mot de passe</label> <input type="password" id="mdp" name="mdp" required="required"> <br>
        </fieldset>
        <input type="submit" id="submit" name="submit" value="Valider">
       </form>
    </body>
</html>
