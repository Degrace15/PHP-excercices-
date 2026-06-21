<?php
if(isset($_POST['envoyer'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  echo "Bonjour $nom ! ton email est $email" . "<br/>";
}
?>
<form method="POST">
  <input type="text" name="nom" placeholder="Nom" required>
  <input type="email" name="email" placeholder="Email" required>
  
  <button type="submit" name="envoyer">Envoyer</button>
</form>