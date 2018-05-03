<?php if($_SERVER['PHP_SELF'] == 'index.php') { ?>
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand js-gotop" href="#">Accueil</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#fh5co-about" class="js-scrollTo">A propos</a></li>
        <li><a href="#fh5co-resume" class="js-scrollTo">CV</a></li>
        <li><a href="#fh5co-features" class="js-scrollTo">Téléchargement</a></li>
        <li><a href="#fh5co-skills" class="js-scrollTo">Compétences</a></li>
        <li><a href="#fh5co-work" class="js-scrollTo">Projets réalisés</a></li>
        <li><a href="#fh5co-started" class="js-scrollTo">Veille</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php } else { ?>
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand js-gotop" href="index.php">Accueil</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php#fh5co-about" class="js-scrollTo">A propos</a></li>
        <li><a href="index.php#fh5co-resume" class="js-scrollTo">CV</a></li>
        <li><a href="index.php#fh5co-features" class="js-scrollTo">Téléchargement</a></li>
        <li><a href="index.php#fh5co-skills" class="js-scrollTo">Compétences</a></li>
        <li><a href="index.php#fh5co-work" class="js-scrollTo">Projets réalisés</a></li>
        <li><a href="index.php#fh5co-started" class="js-scrollTo">Veille</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php } ?>