<?php


echo '<form name="frmFormulaire" method="post" action="index.php?action=connexionLog" >';
  echo '<h4> Connexion</h4>';

  echo '<input class="sign-up" type="email" name="txtEmail" class="user" placeholder="Adresse mail" required="required"/>';
  echo '<input class="sign-up" type="password" name="txtMdp" class="pass"placeholder="Mot de passe" required="required"/>';
 echo '<input class="sign-up-button" type="submit" value="Connexion" class="submit">';

echo '</form>';


?>