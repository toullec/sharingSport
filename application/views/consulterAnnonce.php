<html>
<head>
  <link rel="stylesheet" href="./style/consulterAnn.css">
  <title>SharingSport | Rechercher une annonce</title>
	<script type="text/javascript">
  function choix(){
    if (document.getElementById("radio4").checked){ //Cas du bouton "Materiel"
      document.getElementById("intituleLigne").style.display="block";
      document.getElementById("dispoLigne").style.display="block";
      document.getElementById("niveauLigne").style.display="none";
      document.getElementById("dureeDLigne").style.display="none";
      document.getElementById("heurerdvLigne").style.display="none";
      document.getElementById("lieurdvLigne").style.display="none";

    }
    else if (document.getElementById("radio5").checked){ //Cas du bouton "partenaire"
    document.getElementById("intituleLigne").style.display="none";
    document.getElementById("dispoLigne").style.display="none";
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
      <li> <a href="index.php?action=accueil">Accueil</a></li>
      <li> <a href="index.php?action=renseignementProfil">Mon profil</a></li>
      <li> <a href="index.php?action=vosAnnonces">Mes annonces</a></li>
    </ul>
  </nav>
</header>
<body>
<div class="container">
<h1>Rechercher une annonce :</h1>
<form name="frmFormulaire" action = "index.php?action=consulterAnnonceAct" method="post" onSubmit="return verif_formulaire()">

	<h4> Vous recherchez ... </h4>
	<input type="radio"  onclick="choix()"; name="radiog_dark" value="materiel" id="radio4" required="required"/><label for="radio4" >Matériel</label>
	<input type="radio" onclick="choix()"; name="radiog_dark" value="sportifs" id="radio5" required="required"/><label for="radio5" > Partenaire</label>

	      <div id="intituleLigne" style="display:none;" ><p> Intitulé du bien : </p><input type=text name="txtBien" required="required"></div>
	      <div id="dispoLigne" style="display:none;" ><p> Disponibilité du bien : </p><input type=date name="txtBien" required="required"></div>

      <div id="niveauLigne" style="display:none;" ><p> Niveau : </p><select name="txtNiveau">
        <option value="debutant">Débutant</option>
        <option value="intermediaire">Intermédiaire</option>
        <option value="moyen">Moyen</option>
        <option value="habitue">Habitué </option>
        <option value="expert">Expert </option>
        <option value="competition">Compétition</option>
      </select></div>
      <div id="dureeDLigne" style="display:none;" ><p> Durée/Distance : </p><input type=text name="txtBien" required="required"></div>

<div class="container-right">
<p>Ville:	</p><select name="txtLieu">
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
<p>Sport : </p><select name="txtSport">
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
</div>
			<p>Prix entre</p> <select name="txtPrix1">
			<option value="10">10</option>
			<option value="50">50</option>
			<option value="100">100</option>
			<option value="500">500</option>
			<option value="1000">1000</option></select>

			<select name="txtPrix2">
			<option value="20">20</option>
			<option value="60">60</option>
			<option value="120">120</option>
			<option value="600">600</option>
			<option value="2000">2000</option></select>
			</br></br>

<input type="submit" value="Valider" class="submit">


</form>

</div>
</body>



</html>
