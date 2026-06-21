<?php
if(isset($_POST['connexion'])) {
  $identifiant = htmlspecialchars($_POST['identifiant']);
  $password = $_POST['password'];
  if($identifiant === "admin" && $password === "1234") {
    echo "Bonjour" .$identifiant;
  }
  else {
    echo "Vous êtes un intrus";
  }
}
?>
<form method="POST">
  <input type="text" name="identifiant" placeholder="Identifiant" required>
  <input type="password" name="password" placeholder="Mot de passe" required>
  
  <button type="submit" name="connexion">Se connecter</button>
</form>