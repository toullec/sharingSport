<html>
<head>
<style>
/* CSS */
.cf:before,
.cf:after {
  content:"";
  display:table;
}
.cf:after {
  clear:both;
}
.droite {
  float:right;
}

.oModal {
  position: fixed;
  z-index: 99999;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}

.oModal:target {
  opacity:1;
  pointer-events: auto;
}

.oModal:target > div {
  margin: 10% auto;
  transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}

.oModal > div {
  max-width: 600px;
  position: relative;
  margin: 1% auto;
  padding: 8px 8px 8px 8px;
  border-radius: 5px;
  background: #eee;
  transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}

.oModal > div header,.oModal > div footer {
  border-bottom: 1px solid #e7e7e7;
  border-radius: 5px 5px 0 0;
}
.oModal .footer {
  border:none;
  border-top: 1px solid #e7e7e7;
  border-radius: 0 0 5px 5px;
}

.oModal > div h2 {
  margin:0;
}

.oModal > div .btn {
  float:right;
}

.oModal > div section,.oModal > div > header, .oModal > div > footer {
  padding:15px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="./style/renseignerProfil.css">
<link href="CSS/animate.css" rel="stylesheet">
<link rel="stylesheet" href="./style/header.css">
<link rel="stylesheet" href="./style/header1.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://goo.gl/aKZw83'></script>
<script src="./style/js/index.js"></script>
<title>Votre profil | SharingSport</title>
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


<div class="container">
<?php

if(!empty($_FILES)){//je vérifie s'il y a un fichier de sélectionné
	require("imgClass.php");

	$img = $_FILES['img'];  //je déplace mon fichier dans un autre dossier
	$ext = strtolower(substr($img['name'],-3));//on selectionne les fichiers img pour éviter les tentatives de hack
	$allow_ext = array("jpg","png","gif");//stocke les extensions que l'on autorise
	if(in_array($ext,$allow_ext)){//extension acceptée
		move_uploaded_file($img['tmp_name'], "images/".$img['name']);//je déplace dans le dossier image
		Img::creerMin("images/".$img['name'],"images/min".$img['name'],215,112);//::car fonction static
	}
	else{


		echo 'Ajout de l\'image impossible';
	}


	}

?>

<?php
	//affichage de toutes les images dans le dossier images/min
	/* $dos ="images/min/";
	$dir = opendir($dos); */

	/* while($file = readdir($dir)){
		$ext = strtolower(substr($file,-3));//on selectionne les fichiers img pour éviter les tentatives de hack
		$allow_ext = array("jpg","png","gif");
		if(in_array($ext,$allow_ext)){
			?>
			<div class="min">
			<img src="images/min/<?php echo $file; ?>"/>
			</div>
			<?php
		}
	} */
?>


<div id="oModal" class="oModal">
  <div>
    <header>
      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
       <h2>Exemple de fenêtre « modal » stylisée </h2>
     </header>
     <section>
      <p>Description du message. </p>
     </section>
     <footer class="cf">
      <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
     </footer>
  </div>
</div>

<a href="index.php?action=renseignementProfil#oModal">Ouvrir le popup</a>


<?php

foreach ($model as $ligne):


	echo '<div id="oModal" class="oModal">';
  echo '<div>';
    echo '<header>';
      echo'<a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>';
      echo' <h2>Exemple de fenêtre « modal » stylisée </h2>';
    echo' </header>';
     echo'<section>';
      echo'<p>Description du message. </p>';
     echo'</section>';
     echo'<footer class="cf">';
      echo'<a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>';
    echo' </footer>';
  echo'</div>';
echo'</div>';

echo'<a href="#oModal">Ouvrir le popup</a>';



	echo '<form name="frmFormulaire" action = "index.php?action=consulterAnnonceFavoris" method="post" onSubmit="return verif_formulaire()">';
	echo '<INPUT type="submit" value="Ajouter aux favoris" class="submit">';
	echo '</form>';


	echo ' <p> Nom : </p><inputplaceholder="'.$ligne['nom'].'" disabled="disabled"/><form name="frmFormulaire" action = "index.php?action=modifierNom" method="post" onSubmit="return verif_formulaire()">
	<INPUT type="submit" value="modifier" class="submit">
	</form>
	<p> Prénom : </p><input placeholder="'.$ligne['prenom'].'" disabled="disabled"/>
	<p> Age : </p><input placeholder="'.$ligne['age'].'" disabled="disabled"/>
	<p> Ville : </p><input placeholder="'.$ligne['ville'].'" disabled="disabled"/>
	<p> Pays : </p><input placeholder="'.$ligne['pays'].'" disabled="disabled"/>
	<p> Email : </p><input placeholder="'.$ligne['email'].'" disabled="disabled"/>
	<p> Sexe : </p><input placeholder="'.$ligne['sexe'].'" disabled="disabled"/>
	<p> Biographie : </p><input placeholder="'.$ligne['bio'].'" disabled="disabled"/>
	<p> Niveau sportifs :</p><input placeholder="'.$ligne['niveau_sport'].'" disabled="disabled"/>';

endforeach;

?>
</div>
</body>



</html>
