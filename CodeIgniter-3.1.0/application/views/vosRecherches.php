<html>
<head>
<link rel="stylesheet" href="./style/header.css">
<link rel="stylesheet" href="./style/header1.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://goo.gl/aKZw83'></script>
<script src="./style/js/index.js"></script>
<title>Vos recherches | SharingSport</title>
</head>


  <header>
      <nav id="navigation">
    <a href="index.php?action=accueilDec" class="logo" title="Logo">Sharingsport</a>
    <ul class="links">
      <li><a href="index.php?action=deposerAnnonce" title="Déposer une annonce">Déposer une annonce</a></li>
      <li><a href="index.php?action=consulterAnnonce" title="Rechercher une annonce">Rechercher</a></li>
      <li class="dropdown">
        <a href="#" class="trigger-drop" title="Mon profil">
          Valentin<i class="fa fa-angle-down"></i>
        </a>
        <ul class="drop">
          <li><a href="#" title="Vos favoris">Vos favoris</a></li>
          <li><a href="index.php?action=vosAnnonces" title="Vos annonces">Vos annonces</a></li>
          <li><a href="index.php?action=renseignementRecherches" title="Réservations">Réservations</a></li>
          <li><a href="#" title="Avis">Avis</a></li>
          <li><a href="#" title="Message">Message</a></li>
          <li><a href="index.php?action=renseignementProfil" title="Profil">Profil</a></li>
          <li>
            <a href="#" class="trigger-sub" title="Vos points">
              Vos points<i class="fa fa-angle-down"></i>
            </a>
            <ul class="drop-sub">
              <li><a href="#" title="Points disponible">Points disponible</a></li>
              <li><a href="#" title="Vos bon de réductions">Vos bon de réductions</a></li>
            </ul>
          </li>
          <li><a href="index.php?action=accueil" title="Déconnexion">Déconnexion</a></li>

        </ul>
      </li>
    </ul>
  </nav>
  </header>

<body>
<form name="frmFormulaire" action = "index.php?action=renseignementProfilAct" method="post">

<table border=0>

<tr><td>Biographie:<td></td></tr><tr><td><TEXTAREA name="txtBio" rows=4 cols=40></TEXTAREA></td></tr>

<tr><td>Ajouter une image:<INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" class ="piece" ></INPUT>
	<td><INPUT TYPE="file" NAME="nom" class ="piece"></INPUT></td></tr>

	<tr><td><INPUT type="submit" value="Valider" class="submit"></td><td><INPUT type="reset" value="Réinitialiser" class="reset"></td></tr>

</table>
</FORM>


<?php

	echo '<table border=0>';
	foreach($model as $ligne):

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['prix'].'</td><td>'.$ligne['titre_annonce'].'</td><td>'.$ligne['date_annonce'].'</td></tr>';


	endforeach;

	echo '</table>';

?>
</body>


</html>
