<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class control extends CI_Controller {

	//test mise � jour sur la branche test 2911
	public function index(){
		
			if(isset($_GET['action']) && ($_GET['action'])=='accueilDec'){
			
			$this->accueilDec();
			
		}


		else if(isset($_GET['action']) && ($_GET['action'])=='inscriptionReussite'){
			
			$this->inscriptionReussite();
			
		}

		else if(isset($_GET['action']) && ($_GET['action'])=='inscription'){
			
			$this->inscription();
			
		}
		else if(isset($_GET['action']) && ($_GET['action'])=='renseignementProfil'){
			
			$this->renseignementProfil();
			
		}

		else if(isset($_GET['action']) && ($_GET['action'])=='connexion'){
			
			$this->connexion();
			
		}
		else if(isset($_GET['action']) && ($_GET['action'])=='deposerAnnonce'){
			
			$this->deposerAnnonce();
			
		}

		else if(isset($_GET['action']) && ($_GET['action'])=='deposerAnnonceAct'){
			
			$this->deposerAnnonceAct();
			
		}

		else if(isset($_GET['action']) && ($_GET['action'])=='consulterAnnonce'){
			
			$this->consulterAnnonce();
			
		}

		else if(isset($_GET['action']) && ($_GET['action'])=='consulterAnnonceAct'){
			
			$this->consulterAnnonceAct();
			
		}
		else if(isset($_GET['action']) && ($_GET['action'])=='renseignementProfilAct'){
			
			$this->renseignementProfilAct();
			
		}
		else if(isset($_GET['action']) && ($_GET['action'])=='vosAnnonces'){
			
			$this->vosAnnonces();
			
		}
		
		else if(isset($_GET['action']) && ($_GET['action'])=='vosRecherches'){
			
			$this->vosRecherches();
			
		}
		
		else if(isset($_GET['action']) && ($_GET['action'])=='consulterAnnonceFavoris'){
			$this->consulterAnnonceFavoris();
		}
		
		else if(isset($_GET['action']) && ($_GET['action'])=='annonceAct'){
			$this->annonceAct();
		}
		
		else if(isset($_GET['action']) && ($_GET['action'])=='modifierNom'){
			$this->modifierNom();
		}
		
		
		else if(isset($_GET['action']) && ($_GET['action'])=='modifierNomAct'){
			$this->modifierNomAct();
		}
		
		/*else if(isset($_GET['action']) && ($_GET['action'])=='deposerAnnonce#oModal'){
			echo '<h1>BONJOUR</h1>';
			$this->renseignementProfil();
		}
		else if(isset($_GET['action']) && ($_GET['action'])=='#oModal'){
			echo '<h1>BONJOUR</h1>';
			$this->renseignementProfil();
		}
		/*else if(isset($_GET['action']) && ($_GET['action'])=='renseignementProfil#fermer'){
			$this->renseignementProfil();
		}*/
		else{

			$this->accueil();
		}
		
		/*
		else{

			$this->connexionLog();
		}
		
		*/


	}

	public function accueil(){
		
		$this->load->view('accueil');//nom du fichier sans extension de la vue dans le dossier views
		//représente la page de lancement
		

	}

	public function accueilDec(){
		session_start();
		$id_m = $_SESSION['id_m'];
		$nom = $_SESSION['nom'];
		
		$this->load->view('accueilDec');
	}

	public function inscription(){
		$this->load->view('inscription');
		
	}

	

	public function renseignementProfil(){
		$this->load->model('model');
		$model =$this->model->renseignementProfil();
		$data = array('model'=>$model);
		$this->load->view('renseignementProfil',$data);
	}

	public function renseignementProfilAct(){
		$this->load->model('model');
		$this->model->renseignementProfilAct();
		$this->load->view('renseignementProfilAct');
		
	}
	
	public function vosRecherches(){//les recherches faites le user
		$this->load->model('model');
		$model1 = $this->model->favorisMateriel();
		$model2 = $this->model->favorisPartenaire();
		$data = array('model1' =>$model1,'model2'=>$model2);
		$this->load->view('vosRecherches',$data);
	}
	
	public function vosAnnonces(){// les annonces déposées par le user
		$this->load->model('model');
		$model1 = $this->model->vosAnnoncesPart();
		$model2 = $this->model->vosAnnoncesMat();
		$data = array('model1' =>$model1,'model2'=>$model2);
		$this->load->view('vosAnnonces',$data);
	}
	
	public function consulterAnnonceFavoris(){
		$this->load->model('model');
		$this->model->consulterAnnonceFavoris();
		$this->load->view('consulterAnnonceAct');
	}
	
	public function annonceAct(){
		$this->load->model('model');
		$model =$this->model->annonceAct();
		$data = array('model'=>$model);
		$this->load->view('annonceAct',$data);
	}

	public function inscriptionReussite(){
		/*$this->load->model('model');	
		$this->model->connexionGSB2();
		$this->load->view('connexionGSB2');*/

		$this->load->model('model');
		$this->model->inscriptionReussite();
		$this->load->view('inscriptionReussite');
		
	}

	public function connexion(){
		
		$this->load->model('model');	
		$this->model->connexion();
		$this->load->view('connexion');
	}

	public function deposerAnnonce(){
		$this->load->view('deposerAnnonce');

	}

	public function deposerAnnonceAct(){
		/*session_start();
		$id_m = $_SESSION['id_m'];
		$nom = $_SESSION['nom'];*/
		
		$this->load->model('model');	
		$this->model->deposerAnnonceAct();
		//$data = array('model' =>$model);
		$this->load->view('deposerAnnonceAct');
	}
	
	public function modifierNom(){
		
		$this->load->view('modifierNom');
	}

	public function consulterAnnonce(){
		
		$this->load->view('consulterAnnonce');


	}

	public function consulterAnnonceAct(){
		$this->load->model('model');	
		$model =$this->model->consulterAnnonceAct();
		$data = array('model'=>$model);
		$this->load->view('consulterAnnonceAct',$data);
		
	}

	public function consulterActGSB(){
		session_start();
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id= $_SESSION['id'];
		
		$this->load->model('model');	//on charge le fichier model
		$this->model->consulterActGSB();//on vient chercher la fonction consulterActGSB du fichier model
		$this->load->view('consulterActGSB');//on vient lire le fichier consulterActGSB.php
		
		
		/*$model = $this->model->consulterActGSB();
		$data1 = array('model' =>$model1);
		$model = $this->model->consulterActGSBfiche();*/
		/*$model2 = $this->model->consulterActGSBfiche();
		$data2 = array('model' =>$model2);
		$model3 = $this->model->consulterActGSBhors();
		$data3 = array('model' =>$model3);
		$model4 = $this->model->consulterActGSBforfait();
		$data4 = array('model' =>$model4);
		$this->load->view('consulterActGSB',$data3);*/
		
		/*$this->load->model('model');
		$model = $this->model->consulterActGSB2();
		$data = array('model' =>$model);*/
		/*$this->load->model('model');
		$model1 = $this->model->consulterActGSBforfait();
		$data1 = array('model' =>$model1);*/
		$this->load->view('consulterActGSB');
	
	}

	public function consulterDecFraisGSB(){
		
		$this->load->view('consulterDecFraisGSB');
	}

	public function consulterFraisGSB(){
		
		$this->load->view('consulterFraisGSB');
	}

	public function rensActModifGSB(){
		$this->load->model('model');
		$model = $this->model->rensActModifGSB();
		$data = array('model' =>$model);
		$this->load->view('rensActModifGSB',$data);
	}

	public function rensAffiModifGSB(){
		$this->load->model('model');		
		$model = $this->model->rensAffiModifGSB();
		$data = array('model' =>$model);
		$this->load->view('rensAffiModifGSB',$data);
	}

	public function rensAjoutGSB(){
	
		session_start();
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id= $_SESSION['id'];
		$this->load->model('model');	
		$this->model->rensAjoutGSB();
		$this->load->view('rensAjoutGSB');

	}
	public function rensAjoutAffGSB(){
		
		$this->load->model('model');	
		$this->model->rensAjoutAffGSB();
		$this->load->view('rensAjoutAffGSB');

	}

	public function rensConfirmeGSB(){
		$this->load->model('model');	
		$this->model->rensConfirmeGSB();
		$this->load->view('rensConfirmeGSB');

	}

	public function renseignerFraisGSB(){
		
		$this->load->view('renseignerFraisGSB');
	}
	public function renseignerActGSB(){
		session_start();
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id= $_SESSION['id'];
		$this->load->model('model');	
		$model = $this->model->renseignerActGSB();
		$data = array('model' =>$model);
		$this->load->view('renseignerActGSB',$data);
	}

	public function renseignerDecFraisGSB(){
		
		session_start();
		$login = $_SESSION['login'];
		$pass = $_SESSION['pass'];
		$id= $_SESSION['id'];//
		$this->load->model('model');	
		$model = $this->model->renseignerDecFraisGSB();
		$data = array('model' =>$model);
		$this->load->view('renseignerDecFraisGSB',$data);
	}


	public function rensModifGSB(){
		$this->load->model('model');	
		$model = $this->model->rensModifGSB();
		$data = array('model' =>$model);
		$this->load->view('rensModifGSB',$data);
	}

	public function rensSuppConfGSB(){
		$this->load->model('model');	
		$this->model->rensSuppConfGSB();
		$this->load->view('rensSuppConfGSB');

	}

	public function rensSuppressionGSB(){

		$this->load->model('model');	
		$model = $this->model->rensSuppressionGSB();
		$data = array('model' =>$model);
		$this->load->view('rensSuppressionGSB',$data);
	}
}



?>