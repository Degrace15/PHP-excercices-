<?php
$age = 20;
if($age > 18) {
  echo "Vous êtes majeur";
}
elseif($age === 18) {
  echo "Vous venez d'être majeur";
}
else {
  echo "Vous êtes mineurs";
}
?>