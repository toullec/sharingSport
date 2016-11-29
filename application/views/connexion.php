<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="./style/connexion.css">
        <title>Sharingsport | Home</title>
   </head>
<body>
<header>
  <p> LOGO ICI </p>
  <ul>
<li><a href="index.php?action=connexion">Connexion</a></li>
<li><a href="index.php?action=inscription" >Inscription</a></li>
<li><a href="index.php?action=deposerAnnonce" >Déposer une annonce</a></li>
</ul>
</header>

<div class="container">
  <h1>Connexion à SharingSport</h1>
<h4> Connexion avec Facebook</h4>


<form name="frmFormulaire" method="post" action="index.php?action=connexion" >
  <h4> Connexion</h4>

  <input class="sign-up" type="email" name="txtEmail" class="user" placeholder="Adresse mail" required="required"/>
  <input class="sign-up" type="password" name="txtMdp" class="pass"placeholder="Mot de passe" required="required"/>
 <input class="sign-up-button" type="submit" value="Connexion" class="submit">

</form>
</br></br>
<a href="">Mot de passe oublié ? </a></br></br>
<a href="inscription.php"> Toujours pas de compte ? Par ici ! </a>
</div>
</body>
</html>
