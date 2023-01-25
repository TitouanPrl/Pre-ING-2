<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>
    <body>
      <form id="monForm" name="monForm" action="verificationConnexion.php" method="POST">
        <fieldset>
          <legend>Portail de connexion</legend>
          <label>Pseudo</label> <input type="text" id="login" name="login" required="required"> <br>
          <label>Mot de passe</label> <input type="password" id="mdp" name="mdp" required="required"> <br>
        </fieldset>
        <input type="submit" id="submit" name="submit" value="Valider">
       </form>

       Première connexion en tant qu'élève ! => <a href="../Eleves/inscriptionEleves.php"> ICI </a> <br><br>
       Première connexion en tant que prof ! => <a href="../Prof/inscriptionProfesseurs.php"> ICI </a>
    </body>
</html>
