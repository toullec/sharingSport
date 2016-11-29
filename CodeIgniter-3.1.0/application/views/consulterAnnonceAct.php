<html>


<body>

<h1>Consulter annonce</h1>

<nav id="mainNav">
     <ul>

  <li><a href="index.php?action=accueil">Déconnexion</a></li>
  <li><a href="index.php?action=renseignementProfil">Profil</a></li>
  <li><a href="index.php?action=deposerAnnonce">Déposer une annonce</a></li>
  <li><a href="index.php?action=consulterAnnonce">Consulter une annonce</a></li>
  <li><a href="index.php?action=contact">Contact</a></li>
</ul>
</nav>

<?php
echo '<form name="frmFormulaire" action = "index.php?action=annonceAct" method="post" onSubmit="return verif_formulaire()">';
echo '<table border=0>';
foreach ($model as $ligne):

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['prenom'].'</td><td>'.$ligne['bien'].'</td><td>'.$ligne['prix'].'</td><td>'.$ligne['titre_annonce'].'</td></tr>';
	echo '<input type="hidden" name="txtDate" id="hiddenField" value="'.$ligne['date_annonce'].'" />';
	echo '<input type="hidden" name="txtAnnonce" id="hiddenField" value="'.$ligne['id_a'].'" />';
	echo '<tr><td><INPUT type="submit" value="'.$ligne['lieu_rdv'].'/ '.$ligne['prix'].'€/ '.$ligne['titre_annonce'].'/ '.$ligne['date_annonce'].'" class="submit"></td></tr>';
	echo '<form name="frmFormulaire" action = "index.php?action=consulterAnnonceFavoris" method="post" onSubmit="return verif_formulaire()">';
	echo '<tr><td><INPUT type="submit" value="Ajouter aux favoris" class="submit"></td><td>';


endforeach;
echo '</form>';
echo '</table>';


?>

</body>



</html>
