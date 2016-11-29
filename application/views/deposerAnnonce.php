<html>
<head>
  

 <link rel="stylesheet" href="./style/deposerAnn.css">
  <link rel="stylesheet" href="./style/scriptscroll.js">  <title>SharingSport | Déposez une annonce</title>
  <script type="text/javascript">
  function choix(){
    if (document.getElementById("radio4").checked){ //Cas du bouton "Materiel"
      document.getElementById("container-block-one").style.display="block";
      document.getElementById("container-block-two").style.display="block";
      document.getElementById("prixLigne").style.display="block";
      document.getElementById("intituleLigne").style.display="block";
      document.getElementById("dispoLigne").style.display="block";
      document.getElementById("photoLigne").style.display="block";
      document.getElementById("container-block-four").style.display="block";
      document.getElementById("container-block-three").style.display="none";
      document.getElementById("niveauLigne").style.display="none";
      document.getElementById("dureeDLigne").style.display="none";
      document.getElementById("heurerdvLigne").style.display="none";
      document.getElementById("lieurdvLigne").style.display="none";

    }
    else if (document.getElementById("radio5").checked){ //Cas du bouton "partenaire"
    document.getElementById("prixLigne").style.display="none";
    document.getElementById("container-block-two").style.display="none";
    document.getElementById("intituleLigne").style.display="none";
    document.getElementById("dispoLigne").style.display="none";
    document.getElementById("photoLigne").style.display="none";
    document.getElementById("container-block-one").style.display="block";
    document.getElementById("container-block-three").style.display="block";
    document.getElementById("container-block-four").style.display="block";
    document.getElementById("niveauLigne").style.display="block";
    document.getElementById("dureeDLigne").style.display="block";
    document.getElementById("heurerdvLigne").style.display="block";
    document.getElementById("lieurdvLigne").style.display="block";




      }
    }
</script>
</head>

<header class="main-header">
  <h1>LOGO SHARINGSPORT ICI</h1>
  <nav>
    <ul>
      <li>Connexion</li>
      <li>Inscription</li>
      <li>Comment ça marche ?</li>
    </ul>
  </nav>
</header>
<body>


<!-- ************* Trucsweb.com ************* -->
<!-- FenÃªtre Â« Modal responsive Â» en pure CSS -->
<!-- **************************************** -->
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



<div class="container">
<br><br>
<div id="oModal" class="oModal">
  <div>
    <header>
      <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
       <h2>Modifier votre nom</h2>
     </header>
     <section>
      
	  <input type=text name="txtNom" required="required">
     </section>
     <footer class="cf">
      <a href="#fermer" class="btn droite" title="Fermer la fennetre">Fermer</a>
	  <a href="index.php?action=deposerAnnonceAct" class="btn droite" title="Valider">Valider</a>
     </footer>
  </div>
</div>
 
<a href="index.php?action=deposerAnnonce#oModal">Modifier le nom:</a>
<form name="frmFormulaire" action = "index.php?action=deposerAnnonceAct" method="post" onSubmit="return verif_formulaire()">

  <!-- Boutons radio permettant l'affichage dynamique des champs de texte à remplir selon le cas -->
  <h4> Choisissez votre catégorie : </h4>
  <input type="radio"  onclick="choix()"; name="radiog_dark" value="materiel" id="radio4" required="required"/><label for="radio4" >Matériel</label>
  <input type="radio" onclick="choix()"; name="radiog_dark" value="sportifs" id="radio5" required="required"/><label for="radio5" > Partenaire</label>

</div>
<div class="container-block-one" id="container-block-one" style="display:none;" >

<h4> Informations générales</h4>

 		    <p>Titre de l'annonce : </p><input type=text name="txtTitreAnnonce" required="required">
        <p> Description de l'annonce : </p> <textarea type=text name="txtDescription" rows="10" cols="90" required="required"></textarea>
        <p> Sport : </p>
        <select name="txtSport">
        <option  disabled selected>Selection du sport</option>
  		  <option value="Accrobranche">Accrobranche</option>
  			<option value="Aerobic sportive">Aerobic sportive</option>
  			<option value="Aéromodélisme">Aéromodélisme</option>
  			<option value="Aérostation">Aérostation</option>
  			<option value="Agility">Aérostation</option>
  			<option value="Aikido">Aikido</option>
  			<option value="Alpinisme">Alpinisme</option>
  			<option value="Apnée">Apnée</option>
  			<option value="Aqua gym">Aqua gym</option>
  			<option value="Arts martiaux artistiques">Arts martiaux artistiques</option>
  			<option value="Athlétisme">Athlétisme</option>
  			<option value="Aviation">Aviation</option>
  			<option value="Aviron">Aviron</option>
  			<option value="Baby foot">Baby foot</option>
  			<option value="Badminton">Badminton</option>
  			<option value="Ball trap">Ball trap</option>
  			<option value="Ballet sur glace">Ballet sur glace</option>
  			<option value="Baseball">Baseball</option>
  			<option value="Basket ball">Basket ball</option>
  			<option value="Baton défense">Baton défense</option>
  			<option value="Beach soccer">Beach soccer</option>
  			<option value="Beach volley">Beach volley</option>
  			<option value="Bébé nageur">Bébé nageur</option>
  			<option value="Biathlon">Biathlon</option>
  			<option value="Billard">Billard</option>
  			<option value="BMX">BMX</option>
  			<option value="Bodyboard">Bodyboard</option>
  			<option value="Boogie Woogie">Boogie Woogie</option>
  			<option value="Boomerang">Boomerang</option>
  			<option value="Boule lyonnaise">Boule lyonnaise</option>
  			<option value="Bowling">Bowling</option>
  			<option value="Boxe américaine">Boxe américaine</option>
  			<option value="Boxe anglaise">Boxe anglaise</option>
  			<option value="Boxe chinoise">Boxe chinoise</option>
  			<option value="Boxe française">Boxe française</option>
  			<option value="Boxe thaïlandaise">Boxe thaïlandaise</option>
  			<option value="Bridge">Bridge</option>

      </select>
    </br>
  </br>
</div>

<div class="container-block-two" id="container-block-two" style="display:none;">
      <!-- Champs de textes à remplir si matériels -->
      <h4> Matériel</h4>

      <div id="prixLigne" style="display:none;" ><p> Prix : </p><input type=text name="txtPrix" required="required"></div>
      <div id="intituleLigne" style="display:none;" ><p> Intitulé du bien : </p><input type=text name="txtBien" required="required"></div>
      <div id="dispoLigne" style="display:none;" ><p> Disponibilité du bien : </p><input type=date name="txtDateDispo" required="required"></div>
      <div id="photoLigne" style="display:none;" ><p> Ajouter une image : </p> <input  type="hidden" name="MAX_FILE_SIZE" class ="piece" >
        <input  type="file" name="nom" class ="piece"></div>
		<select name="txtEtat">
  <div id="intituleLigne" style="display:none;" ><p> Etat du bien : </p>
  <option value="1"selected>★</option> 
  <option value="2" >★★</option>
  <option value="3">★★★</option>
  <option value="4">★★★★</option>
  <option value="5">★★★★★</option>
</select>
</div>

<div class="container-block-three" id="container-block-three" style="display:none;">
  <h4> Partenaire(s) sportif(s)</h4>

      <!-- Champs de textes à remplir si sportifs -->
      <div id="niveauLigne" style="display:none;" ><p> Niveau : </p><input type=text name="txtNiveau" required="required"></div>
      <div id="dureeDLigne" style="display:none;" ><p> Durée/Distance : </p><input type=text name="txtDuree" required="required"></div>
      <div id="heurerdvLigne" style="display:none;" ><p> Heure de rendez-vous : </p><input type=text name="txtHeure" required="required"></div>
      <div id="lieuxrdvLigne" style="display:none;" ><p> Lieux de rendez-vous : </p><input type=text name="txtLieu" required="required"></div>

</div>

<div class="container-block-four" id="container-block-four" style="display:none;">
      <h4> Localisation</h4>
      <p> Ville : </p>
      	<select name="txtLieu">
          <option  disabled selected>Selection de la ville</option>
		      <option value="bourg">Bour-en-Bresse (01)</option>
		      <option value="laon">Laon (02)</option>
		      <option value="moulins">Moulins (03)</option>
		      <option value="digne">Digne (04)</option>
		      <option value="gap">Gap (05)</option>
		      <option value="nice">Nice (06)</option>
		      <option value="privas">Privas (07)</option>
		      <option value="charleville">Charleville-Mézières (08)</option>
		      <option value="foix">Foix (09)</option>
		      <option value="troyes">Troyes (10)</option>
		      <option value="carcassonne">Carcassonne (11)</option>
		      <option value="rodez">Rodez (12)</option>
		      <option value="marseille">Marseille (13)</option>
		      <option value="caen">Caen (14)</option>
		      <option value="aurillac">Aurilac (15)</option>
		      <option value="angouleme">Angoulême (16)</option>
		      <option value="larochelle">La Rochelle (17)</option>
		      <option value="bourges">Bourges (18)</option>
		      <option value="tulle">Tulle (19)</option>
		      <option value="ajaccio">Ajaccio (2A)</option>
		      <option value="bastia">Bastia (2B)</option>
		      <option value="dijon">Dijon (21)</option>
		      <option value="saintbrieuc">Saint-Brieuc (22)</option>
		      <option value="gueret">Guéret (23)</option>
		      <option value="perigueux">Périgueux (24)</option>
		      <option value="besancon">Besançon (25)</option>
		      <option value="lille">Valence (26)</option>
		      <option value="evreux">Evreux (27)</option>
		      <option value="chartres">Chartres (28)</option>
		      <option value="quimper">Quimper (29)</option>
		      <option value="nimes">Nîmes (30)</option>
		      <option value="toulouse">Toulouse (31)</option>
		      <option value="auch">Auch (32)</option>
		      <option value="bordeaux">Bordeaux (33)</option>
		      <option value="montpellier">Montpellier (34)</option>
		      <option value="rennes">Rennes (35)</option>
		      <option value="chateauroux">chateauroux (36)</option>
		      <option value="tours">Tours (37)</option>
		      <option value="grenoble">Grenoble (38)</option>
		      <option value="lons">Lons-le-Saunier (39)</option>
		      <option value="montdemarsan">Mont-de-Marsan (40)</option>
		      <option value="blois">Blois (41)</option>
		      <option value="saintetienne">Saint-Etienne (42)</option>
		      <option value="lepuyenvelay">Le Puy-en-Velay (43)</option>
		      <option value="nantes">Nantes (44)</option>
		      <option value="orleans">Orléans (45)</option>
		      <option value="cahors">Cahors (46)</option>
		      <option value="agen">Agen (47)</option>
		      <option value="mende">Mende (48)</option>
		      <option value="angers">Angers (49)</option>
		      <option value="saintlo">Saint-Lô (50)</option>
		      <option value="chalons">Châlons-en-Champagne (51)</option>
		      <option value="chaumont">Chaumont (52)</option>
		      <option value="laval">Laval (53)</option>
		      <option value="nancy">Nancy (54)</option>
		      <option value="barleduc">Bar-le-Duc (55)</option>
		      <option value="vannes">Vannes (56)</option>
		      <option value="metz">Metz (57)</option>
		      <option value="nevers">Nevers (58)</option>
		      <option value="lille">Lille (59)</option>
		      <option value="beauvais">Beauvais (60)</option>
		      <option value="alencon">Alençon (61)</option>
		      <option value="arras">Arras (62)</option>
		      <option value="clermont">Clermont-Ferrand (63)</option>
		      <option value="pau">Pau (64)</option>
		      <option value="tarbes">Tarbes (65)</option>
		      <option value="perpignan">Perpignan (66)</option>
		      <option value="strasbourg">Strasbourg (67)</option>
		      <option value="colmar">Colmar (68)</option>
		      <option value="lyon">Lyon (69)</option>
		      <option value="vesoul">Vesoul (70)</option>
		      <option value="macon">Mâcon (71)</option>
		      <option value="lemans">Le Mans (72)</option>
		      <option value="chambery">Chambéry (73)</option>
		      <option value="annecy">Annecy (74)</option>
		      <option value="paris">Paris (75)</option>
		      <option value="rouen">Rouen (76)</option>
		      <option value="melun">Melun (77)</option>
		      <option value="versailles">Versailles (78)</option>
		      <option value="niort">Niort (79)</option>
		      <option value="amiens">Amiens (80)</option>
		      <option value="albi">Albi (81)</option>
		      <option value="montauban">Montauban (82)</option>
		      <option value="toulon">Toulon (83)</option>
		      <option value="avignon">Avignon (84)</option>
		      <option value="larochesuryon">La-Roche-sur-Yon (85)</option>
		      <option value="poitiers">Poitiers (86)</option>
		      <option value="limoges">Limoges (87)</option>
		      <option value="epinal">Epinal (88)</option>
		      <option value="auxerre">Auxerre (89)</option>
		      <option value="belfort">Belfort (90)</option>
		      <option value="evry">Evry (91)</option>
		      <option value="nanterre">Nanterre (92)</option>
		      <option value="bobigny">Bobigny (93)</option>
		      <option value="creteil">Créteil (94)</option>
		      <option value="pontoise">Pontoise (95)</option>
      </select>
    </br>
    </br>

    <p>Pays : </p><select  name="txtAnnonce" required="required">
    </select>
  </br>
</br>
</br>
</br>
<div class="row">
  <div class="input-group">
    <input type="checkbox" id="terms"/>
    <label for="terms">Je ne souhaite pas être sollicité par des sociétés étrangères au site SharingSport.fr </label>
  </div>
</div>
</br>
</br>

 <input class="sign-up-button" type="submit" value="Valider" class="submit">
</br>
</br>
 <input class="sign-up-button" type="reset" value="Réinitialiser" class="reset">

</div>
</body>

</html>
