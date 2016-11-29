<html>

<body>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="CSS/renseignementProfil.css">
          <link href="CSS/animate.css" rel="stylesheet">

        <title>SharingSport</title>
      

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function() {	$('a[href*=#]:not([href=#]):not([href=#show]):not([href=#hide])').click(function() {
		if ($(window).width() < 768) {
			$('#mainPage').removeClass('open');
			setTimeout(function(){$('#mainPage').removeClass('visible');}, 250);
			open = 0;
		}
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});
</script>

   </head>

<nav id="mainNav">
     <ul>

  <li><a href="index.php?action=vosAnnonces">Vos annonces</a></li>
  <li><a href="index.php?action=vosRecherches">Vos recherches</a></li>
  <li><a href="index.php?action=deposerAnnonce">Déposer une annonce</a></li>
  <li><a href="index.php?action=consulterAnnonce">Consulter une annonce</a></li>
  <li><a href="index.php?action=contact">Contact</a></li>
  <li><a href="index.php?action=inscription">Inscription</a></li>
</ul>
</nav>



<form method="post" action="index.php?action=renseignementProfilAct" enctype="multipart/form-data">
<table border=0>

<tr><td>Biographie:<td></td></tr><tr><td><TEXTAREA name="txtBio" rows=4 cols=40></TEXTAREA></td></tr>



	<tr><td><INPUT type="submit" value="Valider" class="submit"></td><td><INPUT type="reset" value="Réinitialiser" class="reset"></td></tr>
			
</table>
<input type="file" name="img"/>
<input type="submit" name="Envoyer"/>
</form>

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
	$dos ="images/min";
	$dir = opendir($dos);
	
	while($file = readdir($dir)){
		$ext = strtolower(substr($file,-3));//on selectionne les fichiers img pour éviter les tentatives de hack
		$allow_ext = array("jpg","png","gif");
		if(in_array($ext,$allow_ext)){
			?>
			<div class="min">
			<img src="images/min/<?php echo $file; ?>"/>
			</div>
			<?php
		}
	}	
?>

<?php

echo '<table border=0>';
foreach ($model as $ligne): 


	
	
	echo '<tr><td>'.$ligne['nom'].'</td><form name="frmFormulaire" action = "index.php?action=modifierNom" method="post" onSubmit="return verif_formulaire()">
	<td><TD>
	<INPUT type=text name="txtNom">
	</TD>
<INPUT type="submit" value="modifier" class="submit"></td><td></tr>
	</form>';
	

endforeach;

echo '</table>';

?>
</body>


</html>