<!DOCTYPE html>

  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="Pour trouver des amis sportifs et même du matériels sportifs !" name="description">
 <meta content="Site de rencontre,Rencontres,Rencontre,Dating,Club Internet rencontre,Rencontres sur internet,Agence de rencontre,Rencontres femmes,Rencontres hommes,Rencontres sport,Rencontres france,Sports France,Sports France,Passions sportives,Reseau plein air,Reseau sportif,Sport,Plein-air,encontres sportives,activites sportives,partenaires sportifs,partenaires plein air,defis,Aventure,Aventure sportive,Aventures sportives" name="keywords">
<link rel="stylesheet" href="./style/accueil.css">

<link href="CSS/animate.css" rel="stylesheet">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://goo.gl/aKZw83'></script>
<script src="./style/js/index.js"></script>
<script src="./style/js/index2.js"></script>
<script src="./style/js/prefixfree.min.js"></script>
<link rel="stylesheet" href="./style/header.css">
<link rel="stylesheet" href="./style/header1.css">
<title>SharingSport</title>
</head>


<header>
<nav id="navigation">
<a href="index.php?action=accueil" class="logo"title="SharingSport">SharingSport</a>
<ul class="links">
<li><a href="index.php?action=deposerAnnonce" class="loueur" title="Devenez loueur de matériel sportifs">Devenez loueur</a></li>
<li><a class="button" href="#popup1" title="Connectez vous à SharingSport">Connexion</a></li>
<li><a class="button" href="#popup2" title="Rejoignez la communauté SharingSport et partager le sport autrement">Inscription</a></li>
<li><a href="index.php?action=accueil" title="">Comment ça marche ?</a></li>
</ul>
</nav>
</header>


<!--POP UP CONNEXION -->
  <div id="popup1" class="overlay">
  	<div class="popup">
        <h1>Connexion à SharingSport</h1>
  		<a class="close" href="#">&times;</a>
  		<div class="content">

        <div class="social_login">
  				<div class="">
  					<a href="#" class="social_box fb">
  						<span class="icon"><i class="fa fa-facebook"></i></span>
  						<span class="icon_title">Connexion avec Facebook</span>
  					</a>
            <a href="#" class="social_box google">
          <span class="icon"><i class="fa fa-google-plus"></i></span>
          <span class="icon_title">Connexion avec Google</span>
        </a>
  				</div>
        </div>
        </br>
        <div class="separator-with-label"><hr><label><span>ou</span></label></div>
      </br>
        <form name="frmFormulaire" method="post" action="index.php?action=connexion" >
        <input type=text name="txtEmail" placeholder="Adresse e-mail" required="required"></br></br>
        <input type=password name="txtMdp" placeholder="Mot de passe" required="required">
        </br></br>
        <input  type="submit" value="Connexion" class="submit">

        </form>
        </br>
        <a href="">Vous avez oublié votre mot de passe ? </a> </br>
  		</div>
  	</div>
  </div>

<!--FIN POP UP CONNEXION -->

<!--POP UP INSCRIPTION-->
<div id="popup2" class="overlay">
  <div class="popup">

    <h1>Inscription à SharingSport </h1>
    <a class="close" href="#">&times;</a>
    <div class="content">
      <div class="social_login">
        <div class="">
          <a href="#" class="social_box fb">
            <span class="icon"><i class="fa fa-facebook"></i></span>
            <span class="icon_title">Inscription avec Facebook</span>
          </a>
          <a href="#" class="social_box google">
        <span class="icon"><i class="fa fa-google-plus"></i></span>
        <span class="icon_title">Inscription avec Google</span>
      </a>
        </div>
      </div>
        <form>
          <input type=text name="txtEmail" placeholder="Prénom" required="required">
          <input type=text name="txtEmail" placeholder="Nom" required="required">
          <input type=text name="txtEmail" placeholder="Adresse e-mail" required="required">
          <input type=password name="txtMdp" placeholder="Mot de passe" required="required">
            <h4>Terms and Conditions</h4>
              <input type="checkbox" id="terms"/>
              <label for="terms">J'accepte les <a href="">conditions d'utilisation</a></label>
        </br>
          <input type="submit" value="Valider" class="sign-up-button">
        </form>
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
              <script src="js/index.js"></script>

</div>
</div>
</div>
<!--FIN POP UP CONNEXION -->



  <div class="page-one">
    <form action="pagerecherche.html" class="sign-up">
    <div class="sign-up-form">
      <div class="description">
      <h1> Partageons du sport</h1>
    </div>
      <input class="sign-up-input"  required placeholder="Où ?" required>
       <input class="sign-up-input"  required placeholder="Sport " required>
       <input class="sign-up-input"  required placeholder="Quand ?" required>
        <button class="sign-up-button" >Rechercher </button>
      </form>
</div>
</div>

<main class="site-content">

		<!--	<svg class="right-arrow" xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
   			<path d="M0 0h24v24H0z" fill="none"/>
    		<path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
			</svg> -->




      <div class="gallery-places">

        <h3>Les sports du moment </h3>

        <ul class="places">

          <li class="img-large">
            <img src="./style/standup.jpg" alt="Kayak">
            <h4 class="place-names">Stand up Paddle</h4>
          </li>


          <li class="img-short">
            <img src="./style/soccer.jpg">
            <h4 class="place-names">Football</h4>
          </li>


          <li class="img-short">
            <img src="./style/surfer.jpg">
            <h4 class="place-names">Surf</h4>
          </li>
          <li class="img-short">
            <img src="./style/menrun.jpg">
            <h4 class="place-names">Course à pied</h4>
          </li>
          <li class="img-short">
            <img src="./style/cycling.jpg">
            <h4 class="place-names">VTT</h4>
          </li>
        </ul>
      </div>
<!--
	<section class="gallery">

		<div class="news">

			<h3>Les nouveautées</h3>

			<div class="news-block">
        <div class="nblocks">
        <img class="news-profile-picture" src="./style/me.jpg">
        <div class="news-title">Football à 6</div>
				<div class="news-city">
					<h4>Lorient, Bretagne</h4>
				</div>
        <div class="news-diffuculty">
          m
        </div>
      </div>
			</div>

			<div class="news-block"><div class="nblocks">
        <img class="news-profile-picture" src="./style/me.jpg">
				<div class="news-title">Course à pied difficile</div>
				<div class="news-city">
					<h4>Paris, Ile et Vilaine</h4>
				</div>
        <div class="news-diffuculty">
          m
        </div>
			</div>
    </div>

			<div class="news-block"><div class="nblocks">
        <img class="news-profile-picture" src="./style/me.jpg">
				<div class="news-title">Sortie VTT</div>
				<div class="news-city">
					<h4>Lyon, Rhône-Alpes</h4>
				</div>
        <div class="news-diffuculty">
          m
        </div>
			</div>
</div>
		</div>



	</section>
-->
</main>

<footer>



	<div class="footer-content">
		<div class="footer-row">
			<section class="selectors">
				<select class="language-selector">
					<option>Bahasa Indonesia</option>
					<option>Bahasa Melayu</option>
					<option>Català</option>
					<option>Dansk</option>
					<option>Deutsch</option>
					<option>English</option>
					<option>Español</option>
					<option>Eλληνικά</option>
					<option>Français</option>
					<option>Italiano</option>
					<option>Magyar</option>
					<option>Nederlands</option>
					<option>Norsk</option>
					<option>Polski</option>
					<option>Português</option>
					<option>Suomi</option>
					<option>Svenska</option>
					<option>Türkçe</option>
					<option>Íslenska</option>
					<option>Čeština</option>
					<option>Русский</option>
					<option>ภาษาไทย</option>
					<option>中文 (简体)</option>
					<option>中文 (繁體)</option>
					<option>日本語</option>
					<option>한국어</option>
				</select>


			</section>

			<section class="lists">
				<ul>
					<h3>SharingSport</h3>

					<li>À propos</li>
					<li>Press</li>
					<li>Blog</li>
					<li>Aide</li>
					<li>Règles</li>
				</ul>

				<ul>
					<h3>Découvrir</h3>

					<li>Confiance et sécurité</li>
					<li>Guides</li>
					<li>SharingSport coach</li>
				</ul>

				<ul>
					<h3>Location</h3>

					<li>Pourquoi être loueur ?</li>
					<li>Recommandé des loueurs</li>
					<li>Nouveau</li>
					<li>Location responsable</li>
				</ul>
			</section>
		</div>

		<hr>

		<div class="socialnetworks">
			<h2>Join Us On</h2>
			<section class="icons">
				<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
	<g>
		<path id="f_1_" style="fill:#010002;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z"/>
	</svg></div>
				<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="96.828px" height="96.827px" viewBox="0 0 96.828 96.827" style="enable-background:new 0 0 96.828 96.827;" xml:space="preserve">
			<path d="M62.617,0H39.525c-10.29,0-17.413,2.256-23.824,7.552c-5.042,4.35-8.051,10.672-8.051,16.912    c0,9.614,7.33,19.831,20.913,19.831c1.306,0,2.752-0.134,4.028-0.253l-0.188,0.457c-0.546,1.308-1.063,2.542-1.063,4.468    c0,3.75,1.809,6.063,3.558,8.298l0.22,0.283l-0.391,0.027c-5.609,0.384-16.049,1.1-23.675,5.787    c-9.007,5.355-9.707,13.145-9.707,15.404c0,8.988,8.376,18.06,27.09,18.06c21.76,0,33.146-12.005,33.146-23.863    c0.002-8.771-5.141-13.101-10.6-17.698l-4.605-3.582c-1.423-1.179-3.195-2.646-3.195-5.364c0-2.672,1.772-4.436,3.336-5.992    l0.163-0.165c4.973-3.917,10.609-8.358,10.609-17.964c0-9.658-6.035-14.649-8.937-17.048h7.663c0.094,0,0.188-0.026,0.266-0.077    l6.601-4.15c0.188-0.119,0.276-0.348,0.214-0.562C63.037,0.147,62.839,0,62.617,0z M34.614,91.535    c-13.264,0-22.176-6.195-22.176-15.416c0-6.021,3.645-10.396,10.824-12.997c5.749-1.935,13.17-2.031,13.244-2.031    c1.257,0,1.889,0,2.893,0.126c9.281,6.605,13.743,10.073,13.743,16.678C53.141,86.309,46.041,91.535,34.614,91.535z     M34.489,40.756c-11.132,0-15.752-14.633-15.752-22.468c0-3.984,0.906-7.042,2.77-9.351c2.023-2.531,5.487-4.166,8.825-4.166    c10.221,0,15.873,13.738,15.873,23.233c0,1.498,0,6.055-3.148,9.22C40.94,39.337,37.497,40.756,34.489,40.756z"/>
	</svg></div>
				<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="438.529px" height="438.529px" viewBox="0 0 438.529 438.529" style="enable-background:new 0 0 438.529 438.529;" xml:space="preserve">
		<path d="M409.141,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.751,9.801,259.065,0,219.281,0   C179.5,0,142.812,9.801,109.22,29.407c-33.597,19.604-60.194,46.201-79.8,79.796C9.809,142.8,0.008,179.485,0.008,219.267   c0,44.35,12.085,84.611,36.258,120.767c24.172,36.172,55.863,62.912,95.073,80.232c-0.762-20.365,0.476-37.209,3.709-50.532   l28.267-119.348c-4.76-9.329-7.139-20.93-7.139-34.831c0-16.175,4.089-29.689,12.275-40.541   c8.186-10.85,18.177-16.274,29.979-16.274c9.514,0,16.841,3.14,21.982,9.42c5.142,6.283,7.705,14.181,7.705,23.7   c0,5.896-1.099,13.084-3.289,21.554c-2.188,8.471-5.041,18.273-8.562,29.409c-3.521,11.132-6.045,20.036-7.566,26.692   c-2.663,11.608-0.476,21.553,6.567,29.838c7.042,8.278,16.372,12.423,27.983,12.423c20.365,0,37.065-11.324,50.107-33.972   c13.038-22.655,19.554-50.159,19.554-82.514c0-24.938-8.042-45.21-24.129-60.813c-16.085-15.609-38.496-23.417-67.239-23.417   c-32.161,0-58.192,10.327-78.082,30.978c-19.891,20.654-29.836,45.352-29.836,74.091c0,17.132,4.854,31.505,14.56,43.112   c3.235,3.806,4.283,7.898,3.14,12.279c-0.381,1.143-1.141,3.997-2.284,8.562c-1.138,4.565-1.903,7.522-2.281,8.851   c-1.521,6.091-5.14,7.994-10.85,5.708c-14.654-6.085-25.791-16.652-33.402-31.689c-7.614-15.037-11.422-32.456-11.422-52.246   c0-12.753,2.047-25.505,6.14-38.256c4.089-12.756,10.468-25.078,19.126-36.975c8.663-11.9,19.036-22.417,31.123-31.549   c12.082-9.135,26.787-16.462,44.108-21.982s35.972-8.28,55.959-8.28c27.032,0,51.295,5.995,72.8,17.986   c21.512,11.992,37.925,27.502,49.252,46.537c11.327,19.036,16.987,39.403,16.987,61.101c0,28.549-4.948,54.243-14.842,77.086   c-9.896,22.839-23.887,40.778-41.973,53.813c-18.083,13.042-38.637,19.561-61.675,19.561c-11.607,0-22.456-2.714-32.548-8.135   c-10.085-5.427-17.034-11.847-20.839-19.273c-8.566,33.685-13.706,53.77-15.42,60.24c-3.616,13.508-11.038,29.119-22.27,46.819   c20.367,6.091,41.112,9.13,62.24,9.13c39.781,0,76.47-9.801,110.062-29.41c33.595-19.602,60.192-46.199,79.794-79.791   c19.606-33.599,29.407-70.287,29.407-110.065C438.527,179.485,428.74,142.795,409.141,109.203z"/>
	</svg></div>
				<div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;" xml:space="preserve">
	<g>
		<path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895   V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385   h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572   c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332   c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188   H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953   c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
	</svg></div>
			</section>
		</div>

		<div class="copyright">	&copy; SharingSport, Inc.</div>





	</div>
</footer>

</body>
   </html>
