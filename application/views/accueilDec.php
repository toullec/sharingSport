<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="style/accueil.css">
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

  <li><a href="index.php?action=connexion">Connexion</a></li>
  <li><a href="index.php?action=renseignementProfil">Profil</a></li>
  <li><a href="index.php?action=deposerAnnonce">Déposer une annonce</a></li>
  <li><a href="index.php?action=consulterAnnonce">Consulter une annonce</a></li>
  <li><a href="index.php?action=contact">Contact</a></li>
  <li><a href="index.php?action=inscription">Inscription</a></li>
</ul>
</nav>

<div id="page-one">
    <div id="header-pageone">
        <form action="index.php?action=inscriptionReussite" class="sign-up">
            <div class="header">
            <p>VOUS ETES CONNECTE</p>
            </div>
        <div class="description">
            <p> Sharing Sport  est presque prêt, si vous êtes intéressé pour le tester, inscrivez vous ci dessous pour avoir un accès privilégié. </div>
            <div class="champ">
        <input type="email" class="button" placeholder="NOM@EXEMPLE.COM" name="email" id="email"required>
        <input type="submit" class="button" value="GO !" id="submit">
            </div>
        </div>
        </form>
    <a href="#page-two"><div class="mon_cercle">
    <div class="fleche_bas"></div>
    </div></a>
</div>
    
    
<div id="page-two">
   
<section id="about">
  <div class="container">
    <div class="row">
      <h1>Projet</h1>
      <div class="block"></div>
      <p> SharingSport est une plateforme sociale qui permet de rencontrer des sportifs de tout horizons confondus, de partager du matériel, de découvrir le territoire grâce au sport. Quoi de mieux ?
.</p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span>Notre fonctionnement</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span>Notre approche</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span>Notre but</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span>Notre mission</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
  </div>
</section>
    

<section id="team">
  <div class="container">
    <div class="row">
      <h1>La team</h1>
      <div class="block"></div>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="row">
      <div class="three columns"> <img src="http://placehold.it/220x220" width="220" height="220" alt=""/>
        <h4>Karen David</h4>
        <p>Finance / Droit</p>
        <span class="typcn typcn-social-facebook-circular icon"></span><span class="typcn typcn-social-instagram-circular icon"></span><span class="typcn typcn-social-google-plus-circular icon"></span><span class="typcn typcn-social-linkedin-circular icon"></span> </div>
      <div class="three columns"> <img src="http://placehold.it/220x220" width="220" height="220" alt=""/>
        <h4>Morganne</h4>
        <p>Droit</p>
        <span class="typcn typcn-social-facebook-circular icon"></span><span class="typcn typcn-social-instagram-circular icon"></span><span class="typcn typcn-social-google-plus-circular icon"></span><span class="typcn typcn-social-linkedin-circular icon"></span> </div>
      <div class="three columns"> <img src="http://placehold.it/220x220" width="220" height="220" alt=""/>
        <h4>Valentin Le Cam</h4>
        <p>Developer</p>
        <span class="typcn typcn-social-facebook-circular icon"></span><span class="typcn typcn-social-instagram-circular icon"></span><span class="typcn typcn-social-google-plus-circular icon"></span><span class="typcn typcn-social-linkedin-circular icon"></span> </div>
      <div class="three columns"> <img src="http://placehold.it/220x220" width="220" height="220" alt=""/>
        <h4>David</h4>
        <p>Designer</p>
        <span class="typcn typcn-social-facebook-circular icon"></span><span class="typcn typcn-social-instagram-circular icon"></span><span class="typcn typcn-social-google-plus-circular icon"></span><span class="typcn typcn-social-linkedin-circular icon"></span> </div>
     <div class="three columns"> <img src="http://placehold.it/220x220" width="220" height="220" alt=""/>
        <h4>Valentin Le Cam</h4>
        <p>Developer</p>
        <span class="typcn typcn-social-facebook-circular icon"></span><span class="typcn typcn-social-instagram-circular icon"></span><span class="typcn typcn-social-google-plus-circular icon"></span><span class="typcn typcn-social-linkedin-circular icon"></span> </div>
    </div>
  </div>
</section>


    
</div>
<div id="#page-three"> 
    
    <section id="skills">
  <div class="container">
    <h1>Working working ...</h1>
    <div class="block"></div>
    <div class="row">
      <div class="one-third column">
        <h3>Développement</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
      <div class="one-third column">
        <h3>Marketing</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
      <div class="one-third column">
        <h3>Finance</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae, at, labore velit eligendi amet nobis repellat natus.</p>
      </div>
    </div>
    <div class="row">
      <div class="eight columns">
        <div class="progressBar">
          <h4>Avancement du projet</h4>
          <div class="progressBarContainer">
            <div class="progressBarValue value-40"></div>
          </div>
        </div>

      </div>
      <div class="four columns">
        <p>Lorem ipsum dolor sit amet, enim soluta consectetur adipisicing elit. Sit, eius, itaque, porro, beatae impedit officia tenetur reiciendis in quia eum autem. Enim soluta consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
</section>
    </div>
    
    
<div id="page-four">
    
    
    <section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="block"></div>
    <form>
      <div class="row">
        <div class="six columns">
          <label for="exampleRecipientInput">Name</label>
          <input class="u-full-width" type="text">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Email</label>
          <input class="u-full-width" type="email">
        </div>
      </div>
      <div class="row">
        <label for="exampleMessage">Message</label>
        <textarea class="u-full-width"></textarea>
        <input class="button-primary" type="submit" value="Submit">
      </div>
    </form>
  </div>
</section>
    
    
    <footer>
  <div class="container">
    <div class="nine columns">
      <p>Created with love by Valentin.</p>
    </div>
    <div class="three columns"> <span class="typcn typcn-social-facebook-circular socialIcons"></span> <span class="typcn typcn-social-instagram-circular socialIcons"></span> <span class="typcn typcn-social-google-plus-circular socialIcons"></span> <span class="typcn typcn-social-linkedin-circular socialIcons"></span> </div>
  </div>
</footer>
</div>
</body>
   </html>
