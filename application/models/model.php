<?php
// ligne pour la securite
defined('BASEPATH') OR exit('No direct script access allowed');


class model extends CI_Model {
	

	
	public function accueil(){
		
	echo "<meta charset='utf-8' />";
	$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
	if($connexion){

		
		
	
		
	}else{
		echo "Pas de connexion!";
	}

	}
	
	public function inscriptionReussite(){
		echo "<meta charset='utf-8' />";
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");


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
	
	$this->load->library('email');

	$this->email->from('simon5.6@hotmail.fr', 'Your Name');
	$this->email->to('simon-toullec@outlook.fr');
	//$this->email->cc('another@another-example.com');
	//$this->email->bcc('them@their-example.com');

	$this->email->subject('Email Test');
	$this->email->message('Testing the email class.');

	$this->email->send();


	}
	
	
	public function connexionLog(){
		echo "<meta charset='utf-8' />";
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");


	if($connexion){
		
		$requete = "select email,mdp,id_m,nom from membre;";
		$resultat= $connexion->query($requete);
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);

		while($ligne){
			if(isset($_POST['txtEmail']) && isset($_POST['txtMdp']) ) {

			if($_POST['txtEmail'] == $ligne["email"] && $_POST['txtMdp'] == $ligne["mdp"]) {
					//session_start();
					
					//$_SESSION['nom'] =$ligne['nom'];
					//$_SESSION['id_m'] = $ligne['id_m'];
					
					echo header('Location:index.php?action=accueilDec') ;
				}


		}
		$ligne =$resultat->fetch(PDO::FETCH_ASSOC);


	}
	}
	}
	
	
	public function renseignementProfil(){
		
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");


		//$_SESSION['id_m'] = $ligne['id_m'];
		$login = $_SESSION['id_m'];
		$nom = $_SESSION['nom'];
		$requete = 'update membre set bio="'.$_POST['txtBio'].'"
		where id_m="'.$_SESSION['id_m'].'"';
		$resultat= $connexion->query($requete);//st
		$resultat->execute();

	}
	
	public function favorisPartenaire(){
		echo "<meta charset='utf-8' />";
		//session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favorismateriel values("mysql_insert_id()",'.$id_m.')';
		
		$resultat= $connexion->query($requete);
		
	}
	
	
	public function favorisPartInsert(){
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favorispartenaire values("mysql_insert_id()",'.$id_m.')';
		
		$resultat= $connexion->query($requete);
	}
	
	public function vosAnnoncesPart(){
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$id_m = $_SESSION['id_m'];
		$requete = 'select sport,lieu_rdv,date_dispo,description, titre_annonce,dureeDistance
		from annoncePartenaire, membre
		where membre.id_m = annoncePartenaire.id_m
		and membre.id_m="'.$this->$connexion->escpape($id_m).'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
		
		$data = $resultat->fetchALL();
		$this->security->xss_clean($data);
		return $data;
	}
	
	public function vosAnnoncesMat(){
		echo "<meta charset='utf-8' />";
		//session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		$id_m = $_SESSION['id_m'];
		$requete = 'insert into favoris values("'.$id_m.'","")';
		
		$resultat= $connexion->query($requete);
		//$resultat->execute();
		
	}*/
	
	
	public function annonceMatAct(){
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");

		

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
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
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
	
	public function suppressionAnnonceMat(){
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		session_start();
		$id_m = $_SESSION['id_m'];
		
		$requete ='delete from membre where annonceMateriel="'.$_POST[''].'"
		where id_m="'.$id_m.'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
	}
	
	public function suppressionAnnoncePart(){
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		session_start();
		$id_m = $_SESSION['id_m'];
		
		$requete ='delete from annoncePartenaire where annoncePartenaire.id_annoncePartenaire="'.$_POST['txtNom'].'"
		and id_m="'.$id_m.'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
	}
	
	public function suppressionFavorisMat(){
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		session_start();
		$id_m = $_SESSION['id_m'];
		
		$requete ='delete from favorisMateriel where favorisMateriel.id_a="'.$_POST['txtNom'].'"
		and id_m="'.$id_m.'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
	}
	
	public function suppressionFavorisPart(){
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		session_start();
		$id_m = $_SESSION['id_m'];
		
		$requete ='delete from favorisPartenaire where favorisPartenaire="'.$_POST['txtNom'].'"
		and id_m="'.$id_m.'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
	}
	
	public function derniereAnnonce(){
		echo "<meta charset='utf-8' />";
		session_start();
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");

		

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
		and prix between "'.$_POST['txtPrix1'].'" and "'.$_POST['txtPrix2'].'"
		group by id_a DESC
		limit 4';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();

		$data = $resultat->fetchALL();
		
		return $data;
		

	}
	
	public function modifierNomAct(){
		echo "<meta charset='utf-8' />";
		
		$dateCourante = date("y-m-d");
		$connexion = new PDO("mysql:host=localhost;dbname=sharingsport", "root", "");
		session_start();
		$id_m = $_SESSION['id_m'];
		
		$requete ='update membre set nom="'.$_POST['txtNom'].'"
		where id_m="'.$id_m.'"';
		
		$resultat= $connexion->query($requete);
		$resultat->execute();
	}
	
	


}



?>