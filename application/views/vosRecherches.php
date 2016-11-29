<html>

<body>


<nav id="mainNav">
     <ul>

  <li><a href="index.php?action=vosAnnonces">Vos annonces</a></li>
  <li><a href="index.php?action=renseignementRecherches">Vos recherches</a></li>
  <li><a href="index.php?action=deposerAnnonce">Déposer une annonce</a></li>
  <li><a href="index.php?action=consulterAnnonce">Consulter une annonce</a></li>
  <li><a href="index.php?action=contact">Contact</a></li>
  <li><a href="index.php?action=inscription">Inscription</a></li>
</ul>
</nav>


<form name="frmFormulaire" action = "index.php?action=renseignementProfilAct" method="post">

<table border=0>

<tr><td>Biographie:<td></td></tr><tr><td><TEXTAREA name="txtBio" rows=4 cols=40></TEXTAREA></td></tr>

<tr><td>Ajouter une image:<INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" class ="piece" ></INPUT>
	<td><INPUT TYPE="file" NAME="nom" class ="piece"></INPUT></td></tr>

	<tr><td><INPUT type="submit" value="Valider" class="submit"></td><td><INPUT type="reset" value="Réinitialiser" class="reset"></td></tr>
			
</table>
</FORM>


<?php

	echo '<h1>Recherches partenaire</h1>';
	echo '<table border=0>';
	
foreach ($model1 as $ligne): 

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['date_dispo'].'</td><td>'.$ligne['bien'].'</td><td>'.$ligne['description'].'</td><td>'.$ligne['titre_annonce'].'</td><td>'.$ligne['dureeDistance'].'</td></tr>';

endforeach;

echo '</table>';

echo '<h1>Recherches matériel</h1>';
	echo '<table border=0>';
	
foreach ($model2 as $ligne): 

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['date_dispo'].'</td><td>'.$ligne['bien'].'</td><td>'.$ligne['prix'].'</td><td>'.$ligne['titre_annonce'].'</td>
	<td>'.$ligne['description'].'</td><td>'.$ligne['etat'].'</td></tr>';

endforeach;

echo '</table>';

?>
</body>


</html>