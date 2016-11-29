<html>

<body>

<?php
//echo '<form name="frmFormulaire" action = "index.php?action=annonceAct" method="post" onSubmit="return verif_formulaire()">';
echo '<table border=0>';
foreach ($model as $ligne): 

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['prenom'].'</td><td>'.$ligne['bien'].'</td><td>'.$ligne['prix'].'</td><td>'.$ligne['titre_annonce'].'</td></tr>';

	echo '<form name="frmFormulaire" action = "index.php?action=consulterAnnonceFavoris" method="post" onSubmit="return verif_formulaire()">';
	echo '<tr><td><INPUT type="submit" value="Ajouter aux favoris" class="submit"></td><td>';
	echo '</form>';

endforeach;
//echo '</form>';
echo '</table>';


?>
</body>


</html>