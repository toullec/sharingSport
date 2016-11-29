<html>


<body>

<h1>Consulter annonce</h1>

<nav id="mainNav">
     <ul>

  <li><a href="index.php?action=connexion">Connexion</a></li>
  <li><a href="index.php?action=renseignementProfil">Profil</a></li>
  <li><a href="index.php?action=deposerAnnonce">Déposer une annonce</a></li>
  <li><a href="index.php?action=consulterAnnonce">Consulter une annonce</a></li>
  <li><a href="index.php?action=contact">Contact</a></li>
  <li><a href="index.php?action=inscription">Inscription</a></li>
</ul>
</nav>

<?php
echo '<table border=0>';
foreach ($model as $ligne): 

	echo '<tr><td>'.$ligne['sport'].'</td><td>'.$ligne['lieu_rdv'].'</td>
	<td>'.$ligne['prenom'].'</td><td>'.$ligne['bien'].'</td><td>'.$ligne['prix'].'</td><td>'.$ligne['titre_annonce'].'</td></tr>';

endforeach;

echo '</table>';


?>

</body>



</html>