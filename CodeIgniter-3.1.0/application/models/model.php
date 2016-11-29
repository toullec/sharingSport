<?php
// ligne pour la securite
defined('BASEPATH') OR exit('No direct script access allowed');


class model extends CI_Model {



	public function accueil(){

	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){





	}else{
		echo "Pas de connexion!";
	}

	}

	public function inscriptionReussite(){
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$vf=true;
		$requete = 'select email
			from membre';
			$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();
			while($ligne and $vf==true){
				if($_POST['txtEmail'] == $ligne['email']){
					$vf=false;
				}
				$ligne =$resultat->fetch(PDO::FETCH_ASSOC);
			}
		if($vf==true){
			if($_POST['txtMdp'] == $_POST['txtMdpNv']){
			/*$requete = 'insert into membre values("mysql_insert_id()","'.$_POST['txtNom'].'","'.$_POST['txtPrenom'].'",
		"'.$_POST['txtMdp'].'","'.$_POST['txtJour'].'"-"'.$_POST['txtMois'].'"-"'.$_POST['txtAnnee'].'","'.$_POST['txtVille'].'","'.$_POST['txtPays'].'","'.$_POST['txtEmail'].'","'.$_POST['txtSexe'].'","null","null")';
		*/
		$date="'".$_POST['txtAnnee']."-".$_POST['txtMois']."-".$_POST['txtJour']."'";
		/*$requete = "insert into membre values('mysql_insert_id()',".$_POST["txtNom"].",".$_POST['txtPrenom'].",
		".$_POST['txtMdp'].",".$_POST['txtAnnee']."-".$_POST['txtMois']."-".$_POST['txtJour'].",null,".$_POST['txtVille'].",".$_POST['txtPays'].",".$_POST['txtEmail'].",".$_POST['txtSexe'].",null,null,null,'0')";
		$resultat= $connexion->query($requete);//st
		//$resultat->execute();
		echo '<h1>'.$_POST['txtJour'].''.$_POST['txtAnnee'].''.$_POST['txtMois'].'</h1>';
		*/
				$requete = 'insert into membre values("mysql_insert_id()","'.$_POST['txtNom'].'","'.$_POST['txtPrenom'].'",
		"'.$_POST['txtMdp'].'",'.$date.',"null","'.$_POST['txtVille'].'","'.$_POST['txtPays'].'","'.$_POST['txtEmail'].'","'.$_POST['txtSexe'].'","null","null","null","0")';
		$resultat= $connexion->query($requete);//st
		//$resultat->execute();
		echo '<h1>'.$_POST['txtJour'].''.$_POST['txtAnnee'].''.$_POST['txtMois'].'</h1>';
		//echo '<h1>'.$date.'</h1>';
		$requete = 'select id_m
		from membre
		where email="'.$_POST['txtEmail'].'"';
		$resultat= $connexion->query($requete);//st

		$id=$resultat->fetch(PDO::FETCH_ASSOC);

		if(!is_dir($id['id_m'])){
			mkdir("./".$id['id_m'], 0777);
		}


				//...
		// Votre code
		//...
		// Connexion à la base de données
		//...
		// Vérification des données saisies par l'utilisateur
		//...
		// Enregistrement des données dans la base
		//...

		// Récupération des variables nécessaires au mail de confirmation
		$email = $_POST['txtEmail'];
		//$login = $_POST['login'];

		// Génération aléatoire d'une clé
		$cle = md5(microtime(TRUE)*100000);


		// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
		$requete='UPDATE membre SET cle="'.$cle.'" WHERE id_m ="'.$id.'"';
		$resultat= $connexion->query($requete);//st
		//$resultat->execute();
		//$stmt = $connexion->prepare();
		//$stmt->bindParam(':cle', $cle);
		//$stmt->bindParam(':login', $login);
		//$stmt->execute();


		// Préparation du mail contenant le lien d'activation
		$destinataire = $email;
		$sujet = "Activer votre compte" ;
		$entete = "From: sharingsport@outlook.fr" ;

		// Le lien d'activation est composé du login(log) et de la clé(cle)
		$message = 'Bienvenue sur VotreSite,

		Pour activer votre compte, veuillez cliquer sur le lien ci dessous
		ou copier/coller dans votre navigateur internet.

		http://sharingsport.com/activation.php?log='.urlencode($email).'&cle='.urlencode($cle).'


		---------------
		Ceci est un mail automatique, Merci de ne pas y répondre.';


		mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
			}else{

				echo'Inscription impossible';
			}

				//$resultat->execute();

		}else{
			echo '<h1>Email deja existant</h1>';
		}

	}

	public function connexion(){
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");


	if($connexion){

		$requete = "select email,mdp,id_m,nom from membre;";
		$resultat= $connexion->query($requete);
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

		while($ligne){
			if(isset($_POST['txtEmail']) && isset($_POST['txtMdp']) ) {

			if($_POST['txtEmail'] == $ligne["email"] && $_POST['txtMdp'] == $ligne["mdp"]) {
					session_start();

					$_SESSION['nom'] =$ligne['nom'];
					$_SESSION['id_m'] = $ligne['id_m'];

					echo header('Location:index.php?action=accueilDec') ;
				}


		}
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);


	}

	if(isset($_POST['txtEmail']) && isset($_POST['txtMdp'])) {
	if($_POST['txtEmail'] != $ligne["email"] || $_POST['txtMdp'] != $ligne["mdp"]){
			echo "CONNEXION REFUSÉE";
		}
	}
	}else{

		echo "Pas de connexion!";
	}




	}


	public function renseignementProfil(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];

		$requete = 'select nom,prenom,age,ville, pays,email, sexe, bio, niveau_sport
		from membre
		where membre.id_m="'.$id_m.'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;

	}

	public function renseignementProfilAct(){
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");


		//$_SESSION['id_m'] = $ligne['id_m'];
		$login = $_SESSION['id_m'];
		$nom = $_SESSION['nom'];
		$requete = 'update membre set bio="'.$_POST['txtBio'].'"
		where id_m="'.$_SESSION['id_m'].'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();

	}

	public function favorisPartenaire(){
		//session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'select sport,lieu_rdv, date_dispo,titre_annonce,prenom,nom
		from annoncePartenaire, favorisPartenaire,membre
		where favorisPartenaire.id_annoncePartenaire = annoncePartenaire.id_a
		and favorisPartenaire.id_m = membre.id_m
		and nom in (select nom
		from membre,annoncePartenaire
		where membre.id_m = annoncePartenaire.id_m)
			and prenom in(select prenom
		from membre,annoncePartenaire
		where membre.id_m = annoncePartenaire.id_m)
		and favorisPartenaire.id_m="'.$id_m.'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;


	}


	public function favorisMateriel(){//affichage materiel des favoris du user
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'select sport,lieu_rdv,bien,prix, etat, date_dispo,titre_annonce,nom,prenom
		from annonceMateriel, favorisMateriel,membre
		where favorisMateriel.id_annonceMateriel = annonceMateriel.id_a
		and favorisMateriel.id_m = membre.id_m
		and favorisMateriel.id_m="'.$id_m.'"
		and nom in(select nom
		from membre,annonceMateriel
		where membre.id_m = annonceMateriel.id_m
		)
			and prenom in(select prenom
		from membre,annonceMateriel
		where membre.id_m = annonceMateriel.id_m)';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;


	}

	public function favorisMatInsert(){
		 
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favorismateriel values("mysql_insert_id()",'.$id_m.')';

		$resultat= $connexion->query($requete);

	}


	public function favorisPartInsert(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favorispartenaire values("mysql_insert_id()",'.$id_m.')';

		$resultat= $connexion->query($requete);
	}

	public function vosAnnoncesPart(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'select sport,lieu_rdv,date_dispo,description, titre_annonce,dureeDistance
		from annoncePartenaire, membre
		where membre.id_m = annoncePartenaire.id_m
		and membre.id_m="'.$id_m.'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;
	}

	public function vosAnnoncesMat(){

		//session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];
		$requete = 'select sport,lieu_rdv,bien,prix, titre_annonce,date_dispo,description,etat
		from annonceMateriel, membre
		where membre.id_m = annonceMateriel.id_m
		and membre.id_m="'.$id_m.'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;
	}

	/*public function consulterAnnonceFavoris(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favoris values("'.$id_m.'","")';

		$resultat= $connexion->query($requete);
		//$resultat->execute();

	}*/


	public function annonceMatAct(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];

		$requete = 'select sport,lieu_rdv,bien,prix, titre_annonce,prenom, date_annonce
		from annonce, membre
		where membre.id_m = annonce.id_m
		and membre.id_m="'.$id_m.'"
		and annonce.id_a="'.$_POST['txtAnnonce'].'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;




	}


	public function annoncePartAct(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$id_m = $_SESSION['id_m'];

		$requete = 'select sport,lieu_rdv,bien,prix, titre_annonce,prenom, date_annonce
		from annonce, membre
		where membre.id_m = annonce.id_m
		and membre.id_m="'.$id_m.'"
		and annonce.id_a="'.$_POST['txtAnnonce'].'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;




	}


	public function consulterAnnonceAct(){

		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");



		/*$requete = 'select lieu_rdv,sport,prix,nom,bio
		from annonce,membre
		where membre.id_m = annonce.id_m
		and id_m="'.$_SESSION['id_m'].'"
		and lieu_rdv ="'.$_POST['txtLieu'].'"
		and sport="'.$_POST['txtSport'].'"
		and prix between in "'.$_POST['txtPrix1'].'" and "'.$_POST['txtPrix2'].'"';
		$resultat= $connexion->query($requete);
		$resultat->execute();*/

		$requete = 'select sport,lieu_rdv,bien,prix, titre_annonce,prenom, date_annonce,id_a
		from annonce, membre
		where membre.id_m = annonce.id_m
		and sport="'.$_POST['txtSport'].'"
		and lieu_rdv="'.$_POST['txtLieu'].'"
		and prix between "'.$_POST['txtPrix1'].'" and "'.$_POST['txtPrix2'].'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();

		return $data;

	}

	public function deposerAnnonceAct(){


		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		session_start();
		$id_m = $_SESSION['id_m'];
		$nom=$_SESSION['nom'];

		if(!isset($_POST['txtDuree'])){
			$requete='insert into annoncePartenaire values("mysql_insert_id()","'.$_SESSION['id_m'].'","'.$_POST['txtLieu'].'","'.$_POST['txtSport'].'", "'.$_POST['txtDateDispo'].'","'.$dateCourante.'","'.$_POST['txtDescription'].'","'.$_POST['txtAnnonce'].'","'.$_POST['txtNiveau'].'","'.$_POST['txtDuree'].'");';

		}else{
			$requete='insert into annonceMateriel values("mysql_insert_id()","'.$_SESSION['id_m'].'","'.$_POST['txtLieu'].'","'.$_POST['txtBien'].'", "'.$_POST['txtPrix'].'","'.$_POST['txtSport'].'","'.$_POST['txtDateDispo'].'","'.$dateCourante.'","'.$_POST['txtDescription'].'","'.$_POST['txtEtat'].'","'.$_POST['txtAnnonce'].'");';

		}
		$resultat= $connexion->query($requete);
		$resultat->execute();


		/*$data = $resultat->fetchALL();

		return $data;*/

	}


	public function modifierNomAct(){


		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		session_start();
		$id_m = $_SESSION['id_m'];

		$requete ='update membre set nom="'.$_POST['txtNom'].'"
		where id_m="'.$id_m.'"';

		$resultat= $connexion->query($requete);
		$resultat->execute();
	}

	public function consulterActGSBfiche(){

		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

		$login = $_SESSION['login'];
			$pass = $_SESSION['pass'];
			$id = $_SESSION['id'];
		$requete = 'select visiteur.id,mois,nbJustificatifs,montantValide,dateModif,idEtat, nom
						from fichefrais, visiteur
						where fichefrais.idVisiteur =visiteur.id
							and visiteur.id =(select id
												from visiteur
												where login= "'.$login.'"
												and mdp="'.$pass.'"
												)
							and mois = "'.$_POST['lst_mois'].'"';
							$resultat= $connexion->query($requete);
		$resultat->execute();
		$data = $resultat->fetchALL();

		return $data;
	}


	public function consulterActGSBhors(){

		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

		$login = $_SESSION['login'];
			$pass = $_SESSION['pass'];
			$id = $_SESSION['id'];

		$requete = 'select mois,libelle,dateHF,montant,nom
						from lignefraishorsforfait, visiteur
						where lignefraishorsforfait.idVisiteur =visiteur.id
							and visiteur.id =(select id
												from visiteur
												where login= "'.$login.'"
												and mdp="'.$pass.'"
												)
							and mois = "'.$_POST['lst_mois'].'"';
							$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();

		return $data;

	}

	public function consulterActGSBforfait(){

		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

		$login = $_SESSION['login'];
			$pass = $_SESSION['pass'];
			$id = $_SESSION['id'];
		$requete ='select mois,idFraisForfait,quantite
			from lignefraisforfait
			where idVisiteur ="'.$id.'"
			and mois= "'.$_POST['lst_mois'].'"
			';


		$resultat->execute();
		$data = $resultat->fetchALL();

		return $data;



	}

	public function consulterActGSB2(){
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
		$login = $_SESSION['login'];
			$pass = $_SESSION['pass'];
			$id = $_SESSION['id'];
		$requete = 'select ficheFrais.mois,libelle,dateHF,montant,nom,idFraisForfait,quantite,nbJustificatifs,montantValide,dateModif,idEtat
						from lignefraishorsforfait, visiteur,ligneFraisForfait, ficheFrais
						where lignefraishorsforfait.idVisiteur =visiteur.id
							and visiteur.id =(select id
												from visiteur
												where login= "'.$login.'"
												and mdp="'.$pass.'"
												)
								and lignefraishorsforfait.idVisiteur=ligneFraisForfait.idVisiteur
								and ficheFrais.idVisiteur = visiteur.id
							and ficheFrais.mois = "'.$_POST['lst_mois'].'"';


			$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();



		return $data;
	}
	public function consulterActGSB(){
		$ret="";

		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

		if($connexion){

			$login = $_SESSION['login'];
			$pass = $_SESSION['pass'];
			$id = $_SESSION['id'];
			/* =====DATE COURANTE===== */
			$dateCourante = date("Y-m-d");
			$dateMois = date("m");
			$dateJour = date("d");


			$requete = 'select sum(quantite) as nb
			from lignefraisforfait
			where idVisiteur = "'.$id.'"';
			$resultat= $connexion->query($requete);
			$ligne =$resultat->fetch(PDO::FETCH_ASSOC);
			$montant = $ligne['nb'];

			$requete ='update fichefrais set montantValide = "'.$montant.'"
			where idVisiteur ="'.$id.'"
			and "'.$dateMois.'"';
			$resultat= $connexion->query($requete);

			/* ====CONSULTATION FRAIS==== */
			echo "<h1><br>Consultation des frais:</h1>";
			$requete = 'select visiteur.id,mois,nbJustificatifs,montantValide,dateModif,idEtat, nom
						from fichefrais, visiteur
						where fichefrais.idVisiteur =visiteur.id
							and visiteur.id =(select id
												from visiteur
												where login= "'.$login.'"
												and mdp="'.$pass.'"
												)
							and mois = "'.$_POST['lst_mois'].'"';
							$resultat= $connexion->query($requete);
							$ligne =$resultat->fetch(PDO::FETCH_ASSOC);




			echo "<div id='consulterAct'>";
			echo "<table border =0>";
			echo "<h2>Fiche de frais:</h2>";
			echo "<tr><th>NOM</th><th>MOIS</th><th>JUSTIFICATIFS</th><th>MONTANT VALIDE</th><th>DATE</th><th>Etat</th></tr>";

			/* ====CONVERSION DU MOIS EN CHAINE==== */
			$mois="";
			if($ligne['mois']==1){
				$mois = "Janvier";
			}else if($ligne['mois']==2){
				$mois = "Février";
			}
			else if($ligne['mois']==3){
				$mois = "Mars";
			}
			else if($ligne['mois']==4){
				$mois = "Avril";
			}
			else if($ligne['mois']==5){
				$mois = "Mai";
			}
			else if($ligne['mois']==6){
				$mois = "Juin";
			}
			else if($ligne['mois']==7){
				$mois = "Juillet";
			}
			else if($ligne['mois']==8){
				$mois = "Aout";
			}
			else if($ligne['mois']==9){
				$mois = "Septembre";
			}
			else if($ligne['mois']==10){
				$mois = "Octobre";
			}
			else if($ligne['mois']==11){
				$mois = "Novembre";
			}
			else if($ligne['mois']==12){
				$mois = "Décembre";
			}

			/* ====ETAT==== */
			$idEtat = "";
			while($ligne){
				if($ligne['idEtat'] == "CL"){
					$idEtat = "Saisie en cours";

				}
				else if($ligne['idEtat'] == "CR"){
					$idEtat = "Fiche crée, saisie en cours";
				}
				else if($ligne['idEtat'] == "RB"){
					$idEtat = "Remboursée";
				}
				else if($ligne['idEtat'] == "VA"){
					$idEtat = "Validée et mise en paiement";
				}
				echo"<tr><td>".$ligne['nom']."</td><td>".$mois."</td>
				<td>".$ligne['nbJustificatifs']."</td><td>".$ligne['montantValide']."</td><td>".$ligne['dateModif']."</td><td>".$idEtat."</td></tr>";
				$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

			}
			echo "</table>";

			/* ====FRAIS HORS FORFAIT==== */
			$requete = 'select mois,libelle,dateHF,montant,nom
						from lignefraishorsforfait, visiteur
						where lignefraishorsforfait.idVisiteur =visiteur.id
							and visiteur.id =(select id
												from visiteur
												where login= "'.$login.'"
												and mdp="'.$pass.'"
												)
							and mois = "'.$_POST['lst_mois'].'"';
							$resultat= $connexion->query($requete);

			$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

			echo"<br>";
			echo "<table border =0>";
			echo "<h2>Frais hors forfait:</h2>";
			echo "<tr><th>NOM</th><th>MOIS</th><th>LIBELLE</th><th>DATE</th><th>MONTANT</th></tr>";


			while($ligne){
				echo"<tr><td>".$ligne['nom']."</td><td>".$mois."</td>
				<td>".$ligne['libelle']."</td><td>".$ligne['dateHF']."</td><td>".$ligne['montant']."</td></tr>";
				$ligne =$resultat->fetch(PDO::FETCH_ASSOC);
			}



			echo "</table>";

			/* ====FRAIS FORFAIT==== */
			$requete ='select mois,idFraisForfait,quantite
			from lignefraisforfait
			where idVisiteur ="'.$id.'"
			and mois= "'.$_POST['lst_mois'].'"
			';
			$resultat= $connexion->query($requete);

			$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

			echo "<h2>Détail fiche de frais:</h2>";
			$ret= '<table border=0>';
			$ret=$ret. '<tr><th>NOM</th><th>MOIS</th><th>FRAIS</th><th>MONTANT</th></tr>';

			while($ligne){

				if($_POST['lst_mois'] ==1){
					$dateModif ="Janvier";

				}
				else if($_POST['lst_mois'] == 2){
					$dateModif ="Février";
				}
				else if($_POST['lst_mois'] == 3){
					$dateModif ="Mars";
				}
				else if($_POST['lst_mois'] ==4){
					$dateModif ="Avril";
				}
				else if($_POST['lst_mois'] == 5){
					$dateModif ="Mai";
				}

				else if($_POST['lst_mois'] == 6){
					$dateModif ="Juin";
				}

				else if($_POST['lst_mois'] == 7){
					$dateModif ="Juillet";
				}

				else if($_POST['lst_mois'] == 8){
					$dateModif ="Aout";
				}


				else if($_POST['lst_mois'] == 9){
					$dateModif ="Septembre";
				}

				else if($_POST['lst_mois'] == 10){
					$dateModif ="Octobre";
				}

				else if($_POST['lst_mois'] == 11){
					$dateModif ="Novembre";
				}


				else if($_POST['lst_mois'] == 12){
					$dateModif ="Décembre";
				}
				$idFrais= "";
				if($ligne['idFraisForfait'] == "ETP" ){
					$idFrais ="Etape";
				} else if($ligne['idFraisForfait'] == "REP" ){
					$idFrais ="Repas";
				}
				else if($ligne['idFraisForfait'] == "KM"){
					$idFrais ="Kilomètre";
				}
				else if($ligne['idFraisForfait'] == "NUI"){
					$idFrais ="Nuitée";
				}

				$ret=$ret. '<tr><td>'.$login.'</td><td>'.$dateModif.'</td><td>'.$idFrais.'</td><td>'.$ligne['quantite'].'</td></tr>';
				$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

			}
			$ret=$ret. "</div>";

		}else{
			echo "Pas de connexion!";
		}


		return $ret;
	}

	public function rensActModifGSB(){

		$ret="";
	session_start();
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	$i=0;
	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];

		$_SESSION['lst_frais'] = $_POST['lst_frais'];
		$lst_frais = $_SESSION['lst_frais'];

		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");




		$requete = 'select mois,quantite, idFraisForfait
		from lignefraisforfait
		where idvisiteur="'.$id.'"
		and mois ="'.$dateMois.'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();





	}else{
		echo "Pas de connexion!";
	}

	return $data;

	}

	public function rensAffiModifGSB(){

		$ret="";
	session_start();
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	$i=0;
	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];
		$lst_frais = $_SESSION['lst_frais'];
		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");



		/* ====MODIFICATION quantite LIGNE FRAIS FORFAIT==== */

		if($lst_frais =="Nuitée/"){
			$requete = 'update lignefraisforfait
			set quantite ="'.$_POST['txtMontant'].'"
			where idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"
			and idFraisForfait ="NUI"';
		$resultat= $connexion->query($requete);

		/* ====AFFICHAGE VALEUR MODIFIEE==== */
		$requete ='select mois,idFraisForfait,quantite from lignefraisforfait
		where idFraisForfait ="NUI"
		and idvisiteur = "'.$id.'"
		and mois = "'.$dateMois.'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();

		$ret=$ret. '<table border=0>';
		$ret=$ret. '<tr><th>LIBELLE</th><th>MONTANT</th><th>MOIS</th></tr>';
		$ret=$ret.'<tr><td>Nuitée</td><td>'.$ligne['quantite'].'</td><td>'.$ligne['mois'].'</td></tr>';
		$ret=$ret. "</table>";

		}else if($lst_frais =="Repas/"){
			$requete = 'update lignefraisforfait
			set quantite ="'.$_POST['txtMontant'].'"
			where idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"
			and idFraisForfait ="REP"';
		$resultat= $connexion->query($requete);

		/* ====AFFICHAGE VALEUR MODIFIEE==== */
		$requete ='select mois,idFraisForfait,quantite from lignefraisforfait
		where idFraisForfait ="REP"
			and idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();

		$ret=$ret. '<table border=0>';
		$ret=$ret. '<tr><th>LIBELLE</th><th>MONTANT</th><th>MOIS</th></tr>';
		$ret=$ret. '<tr><td>Repas</td><td>'.$ligne['quantite'].'</td><td>'.$ligne['mois'].'</td></tr>';
		$ret=$ret. "</table>";

		}else if($lst_frais =="Kilomètre/"){
			$requete = 'update lignefraisforfait
			set quantite ="'.$_POST['txtMontant'].'"
			where idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"
			and idFraisForfait ="KM"';
		$resultat= $connexion->query($requete);

		/* ====AFFICHAGE VALEUR MODIFIEE==== */
		$requete ='select mois,idFraisForfait,quantite
		from lignefraisforfait
		where idFraisForfait ="KM"
			and idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"';
		//and visiteur = and ...
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();
		$ret=$ret. '<table border=0>';
		$ret=$ret. '<tr><th>LIBELLE</th><th>MONTANT</th><th>MOIS</th></tr>';
		echo '<tr><td>Kilomètre</td><td>'.$ligne['quantite'].'</td><td>'.$ligne['mois'].'</td></tr>';
		echo "</table>";
		}
		else if($lst_frais =="Etape/"){
			$requete = 'update lignefraisforfait
			set quantite ="'.$_POST['txtMontant'].'"
			where idvisiteur = "'.$id.'"
			and mois = "'.$dateMois.'"
			and idFraisForfait ="ETP"';
		$resultat= $connexion->query($requete);

		/* ====AFFICHAGE VALEUR MODIFIEE==== */
		$requete ='select mois,idFraisForfait,quantite from lignefraisforfait
		where idFraisForfait ="ETP"
		and mois = "'.$dateMois.'"
		and idVisiteur ="'.$id.'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();

		$dateModif ="";
		if($dateMois ==1){
				$dateModif ="Janvier";

			}
			else if($dateMois == 2){
				$dateModif ="Février";
			}
			else if($dateMois == 3){
				$dateModif ="Mars";
			}
			else if($dateMois==4){
				$dateModif ="Avril";
			}
			else if($dateMois == 5){
				$dateModif ="Mai";
			}

			else if($dateMois == 6){
				$dateModif ="Juin";
			}

			else if($dateMois == 7){
				$dateModif ="Juillet";
			}

			else if($dateMois == 8){
				$dateModif ="Aout";
			}


			else if($dateMois == 9){
				$dateModif ="Septembre";
			}

			else if($dateMois == 10){
				$dateModif ="Octobre";
			}

			else if($dateMois == 11){
				$dateModif ="Novembre";
			}


			else if($dateMois == 12){
				$dateModif ="Décembre";
			}


		/* ====AFFICHAGE VALEUR MODIFIEE==== */


	}else{
		echo "Pas de connexion!";
	}


	return $data;

	}
	}

	public function rensAjoutAffGSB(){


		session_start();

	$ret="";
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];
		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");
		list($year, $month,$day )=split('[/.-]', $_POST['txtDateFrais']);



	if(isset($_POST['txtAutresFrais']) && isset($_POST['txtDateFrais']) && isset($_POST['txtMontantFrais'])){

		if($dateCourante< $_POST['txtDateFrais']  and $dateMois> $month){
			echo "<script>alert(\"La date n'est pas conforme\")</script>";

		}else{
			echo "<h2><br><br>Le frais a bien été ajouté</h2>";
		/* ====INSERTION LIGNE FRAIS HORS FORFAIT==== */
		$requete = 'insert into lignefraishorsforfait values
		("mysql_insert_id()",
		"'.$id.'",
		"'.$dateMois.'",
		"'.$_POST["txtAutresFrais"].'",
		"'.$_POST["txtDateFrais"].'",
		"'.$_POST["txtMontantFrais"].'")';//ok
	$resultat= $connexion->query($requete);



		$ret= "<table border =0>";
		$ret=$ret. "<tr><th>DATE</th><th>LIBELLE</th><th>MONTANT</th></tr>";
		$ret=$ret. "<tr><td>".$_POST['txtDateFrais']."</td><td>".$_POST['txtAutresFrais']."</td>
		<td>".$_POST['txtMontantFrais']." <td></tr>";
		$ret=$ret. "</table>";

		/* ====AJOUT JUSTIFICATIFS==== */
		$requete ='select nbJustificatifs
			from fichefrais
			where idVisiteur ="'.$id.'"
			and mois="'.$dateMois.'"';
		$resultat= $connexion->query($requete);
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);
		$nbJust = $ligne['nbJustificatifs'];

		if($_POST['nom'] !=""){

			$nbJust = $nbJust+1;
			$requete ='update fichefrais
			set nbJustificatifs ="'.$nbJust.'"
			where mois ="'.$dateMois.'"
			and idVisiteur ="'.$id.'"';
			$resultat= $connexion->query($requete);

		}
		}
	}
	}else{
		echo "Pas de connexion!";
	}

	return $ret;
	}

	public function rensAjoutGSB(){

		$ret="";

	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];
		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");


	}else{
		echo "Pas de connexion!";
	}



	}



	public function rensConfirmeGSB(){

		$ret="";
	session_start();
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];
		$libfrais = $_SESSION['libfrais'];


		/* ====SUPPRESSION FRAIS HORS FORFAIT==== */
		$requete ='delete from lignefraishorsforfait where libelle like "'.$libfrais.'%" limit 1';
		$resultat= $connexion->query($requete);
		if ($resultat) {

			$ret= "<h1><br>Frais supprimé</h1>";
		} else {
			$ret="<h1><br>Frais non supprimé</h1>";
		}

		$ret=$ret. "<h2>".$libfrais."</h2>";



	}else{
		echo "Pas de connexion!";
	}

	return $ret;
	}



	public function renseignerActGSB(){

		$ret="";

	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];
		/* =====1ER TEST===== */
		$requete = 'select mois,montantValide,nbJustificatifs
					from fichefrais, visiteur
					where fichefrais.idVisiteur =visiteur.id
						and visiteur.id =(select id
											from visiteur
											where login= "'.$login.'"
											and mdp ="'.$pass.'")';
		$resultat= $connexion->query($requete);
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);
		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");
		$dateJour = date("d");
		$dateM1 = $dateMois-1;






		//pk dateM1? pour cloturée l'ancienne fiche de frais
		if($dateM1 == 0){
			$dateM1 =12;
		}

		$requete ='select * from fichefrais where mois= "'.$dateMois.'"
		and idvisiteur ="'.$id.'";';
		$resultat= $connexion->query($requete);
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

		/* ====MODIFICATION FICHE FRAIS==== */
		if(!$ligne){//il n'y a pas de fiche existante pour le mois courant
			//on cloture l'ancienne fiche
			$requete='update fichefrais set idEtat="CL"
				where mois="'.$dateM1.'"
				and idvisiteur ="'.$id.'"';//ok
				$resultat= $connexion->query($requete);

			$montant = $_POST['txtForfaitEtape']+$_POST['txtForfaitKilo']+$_POST['txtForfaitNuit']+$_POST['txtForfaitRep'];
			//saisie en cours
				$requete = 'insert into ficheFrais values("'.$id.'","'.$dateMois.'"
				,"0","'.$montant.'","'.$dateCourante.'","CR")';
				$resultat= $connexion->query($requete);


		}


			if($dateJour == 28){// au 28 eme jour on valide et mise en paiement
				$requete='update fichefrais set idEtat="VA"
				where mois="'.$dateMois.'"
				and idvisiteur ="'.$id.'"';//ok
				$resultat= $connexion->query($requete);

			}
			else if($dateJour == 25){
				$requete='update fichefrais set idEtat="RB"
				where mois="'.$dateMois.'"
				and idvisiteur ="'.$id.'"';//ok
				$resultat= $connexion->query($requete);

			}


		 /* ====INSERTION DES FRAIS==== */

			$requete = 'insert into ligneFraisForfait values("'.$id.'","'.$dateMois.'","KM","'.$_POST["txtForfaitKilo"].'")';
			$resultat= $connexion->query($requete);


			$requete = 'update fichefrais set dateModif="'.$dateCourante.'"
				where mois="'.$dateMois.'"
				and idvisiteur ="'.$id.'"';
				$resultat= $connexion->query($requete);

				$requete = 'insert into ligneFraisForfait values("'.$id.'","'.$dateMois.'","REP","'.$_POST["txtForfaitRep"].'")';
			$resultat= $connexion->query($requete);


			$requete = 'insert into ligneFraisForfait values("'.$id.'","'.$dateMois.'","NUI","'.$_POST['txtForfaitNuit'].'")';
			$resultat= $connexion->query($requete);


				$requete = 'insert into ligneFraisForfait values("'.$id.'","'.$dateMois.'","ETP","'.$_POST["txtForfaitEtape"].'")';
			$resultat= $connexion->query($requete);

			//}

		$requete ='select mois,idFraisForfait,quantite
				from lignefraisforfait
				where idVisiteur ="'.$id.'"
				and mois= "'.$dateMois.'"
				';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();


	}else{
		echo "Pas de connexion!";
	}

	return $data;

	}



	public function renseignerDecFraisGSB(){
		error_reporting(E_ALL ^ E_DEPRECATED);

	$ret="";
	$stack = array("orange", "banana");
	array_push($stack, "apple", "raspberry");
	//session_start();

	 $connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){
		//mysql_select_db("sharingsportv1");
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];


		/* =====DATE COURANTE===== */
		$dateCourante = date("Y-m-d");
		$dateMois = date("m");


		/* =============IMPORTANT===================*/

		$requete = 'select mois
		from ficheFrais
		where idVisiteur ="'.$id.'"
		and mois = "'.$dateMois.'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();



	}
	return $data;

	}

	public function rensModifGSB(){

	session_start();
	$ret="";
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];


		$requete ='select idFraisForfait,mois from lignefraisforfait
		where idVisiteur = "'.$id.'"
		order by mois';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();
		$data = $resultat->fetchALL();




	}else{
		echo "Pas de connexion!";
	}

	return $data;


	}


	public function rensSuppConfGSB(){


		$ret="";
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");
	if($connexion){
		session_start();
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];

		if(isset($_POST['lst_frais'])){
			$_SESSION['libfrais'] = $_POST['lst_frais'];




		$ret=$ret. "<h2>Confirmer la suppression du frais: ".$_SESSION['libfrais']."</h2>";

		}else{
			echo "Pas de connexion!";
		}

		return $ret;

	}
	}

	public function rensSuppressionGSB(){

	$ret="";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsportv1", "root", "root");

	if($connexion){

		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id = $_SESSION['id'];



		/* ====SELECTION DU FRAIS A SUPPRIMER==== */
		$requete ='select libelle
				from lignefraishorsforfait
				where idVisiteur="'.$id.'";';
				$resultat= $connexion->query($requete);//st
				$resultat->execute();
				$data = $resultat->fetchALL();





	}else{
		echo "Pas de connexion!";
	}

	return $data;



	}


}



?>
