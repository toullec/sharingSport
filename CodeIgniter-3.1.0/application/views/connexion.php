<!DOCTYPE html>

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="./style/connexion.css">
  <link rel="stylesheet" href="./style/header.css">
  <link rel="stylesheet" href="./style/header1.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://goo.gl/aKZw83'></script>
  <script src="./style/js/index.js"></script>
  <script src="./style/js/index2.js"></script>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1026919780716749',
        xfbml      : true,
        version    : 'v2.8'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
  <title>Connexion | SharingSport</title>
  </head>
  <header>
  <nav id="navigation">
  <a href="index.php?action=accueil" class="logo" title="Logo">Sharingsport</a>
  <ul class="links">
  <li><a href="index.php?action=connexion" title="Connectez vous à SharingSport">Connexion</a></li>
  <li><a href="index.php?action=inscription" title="Rejoignez la communauté SharingSport et partager le sport autrement">Inscription</a></li>
  <li><a href="index.php?action=accueil" title="">Solution collaboratif</a></li>
  </ul>
  </nav>
  </header>
<body>

<div class="container">
  <h1>Connexion à SharingSport</h1>
  <a class="socialbox facebook" href="https://www.facebook.com/">
    <div class="social-icon">
      <i class="fa fa-fw fa-facebook"></i>
    </div>
    <div class="description">
      <span class="ng-binding-shares"></span>
      <span class="ng-binding-likes"></span>
      <span>Connexion avec Facebook</span>
    </div>
  </a>
</br></br></br>
<div class="separator-with-label"><hr><label><span>OU</span></label></div>
</br>


<form name="frmFormulaire" method="post" action="index.php?action=connexion" >

<p> Adresse email : </p><input type=text name="txtEmail" placeholder="exemple@exemple.com" required="required">
<p> Mot de passe : </p><input type=password name="txtMdp" placeholder="******" required="required">
</br></br></br></br>
<input  type="submit" value="Connexion" class="submit">

</form>
</br>
<a href="">Vous avez oublié votre mot de passe ? </a> </br>
<a href="index.php?action=inscription"> Toujours pas inscrit sur SharingSport ? Par ici ! </a>
</div>
</body>
</html>
