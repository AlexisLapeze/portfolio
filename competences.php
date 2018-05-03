<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alexis Lapeze | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- mycss -->
	<link rel="stylesheet" href="css/mycss.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
<body>
	<?php require './nav.php' ?>
<?php 
	if($_GET["id"] == "electron"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">Application de bureau Thingz</h2>
					<ul>
						<li>Conception d'une application de bureau pour l'entreprise Thingz.</li>
	                    <li>Découverte du framework Electron basé sur Node.js et de NPM le gestionnaire de paquet de Node.JS.</li>
	                    <li>Écriture d'une docummentation technique pour les futurs développeurs de ce projet.</li>
	                    <li>Gestion des différentes versions du projet avec Git et Bitbucket.</li>
	                    <li>Éxécution de scripts shell/console pour compiler du code C++ Arduino.</li>
	                    <li>Utilisation d'Heroku pour le déploiement en production de l'application.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="electronDivImage">
			<img class="electronImage" src="images/electron.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Avenant_Alexis_2eme_Annee.pdf#page=5" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire</li>
		        <li><strong><a class="myA" href="./documents/competences/trelloElectron.png" target="_blank">A1.4.1</a></strong> : Participation à un projet.</li>
		        <li><strong><a class="myA" href="#">A2.1.1</a></strong> : Accompagnement des utilisateurs dans la prise en main d'un service.</li>
		        <li><strong><a class="myA" href="#">A2.3.2</a></strong> : Proposition d'amélioration d'un service.</li>
		        <li><strong><a class="myA" href="images/electron.png" target="_blank">A4.1.2</a></strong> : Adaptation de l'IHM du site.</li>
		        <li><strong><a class="myA" href="./documents/competences/electron-capture.png" target="_blank">A4.1.7</a></strong> : Développement, utilisation ou adaptation de composants logiciels.</li>
		        <li><strong><a class="myA" href="images/github_electron_builder.png" target="_blank">A4.2.1</a></strong> : Analyse et correction d’un dysfonctionnement, d’un problème de qualité de service ou de sécurité.</li>
		        <li><strong><a class="myA" href="images/bitbucket_thingz.png" target="_blank">A5.1.1</a></strong> : Mise en place d'une gestion de configuration (Git).</li> 
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Avenant_Alexis_2eme_Annee.pdf#page=5" target="_blank">A5.2.4</a></strong> : Étude d‘une technologie, d'un composant, d'un outil ou d'une méthode.</li> 
		    </ul>
		</div>
	</div>
<?php } ?>

<?php 
	if($_GET["id"] == "ionic"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">Application Mobile Thingz</h2>
					<ul>
						<li>Conception d'une ébauche d'application mobile pour l'entreprise Thingz.</li>
	                    <li>Découverte du framework Ionic basé sur Angular.</li>
	                    <li>Écriture d'une docummentation technique pour les futurs développeurs de ce projet.</li>
	                    <li>Gestion des différentes versions du projet avec Git et Bitbucket.</li>
	                    <li>Etude de différentes technologies par confrontation (Benchmark)</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="ionicDivImage">
			<img class="ionicImage" src="images/thingz-mobile-app.old.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Alexis_1er_Annee.pdf#page=5" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire</li>
		        <li><strong><a class="myA" href="https://ionicframework.com/docs/native/bluetooth-serial/" target="_blank">A1.1.2</a></strong> : Étude de l'impact de l'intégration d'un service sur le système informatique.</li>
		        <li><strong><a class="myA" href="./documents/competences/benchmark.png" target="_blank">A1.2.1</a></strong> : Élaboration et présentation d'un dossier de choix de solution technique.</li>
		        <li><strong><a class="myA" href="./documents/competences/benchmark.png" target="_blank">A1.2.3</a></strong> : Évaluation des risques liés à l'utilisation d'un service.</li>
		        <li><strong><a class="myA" href="./documents/competences/benchmark.png" target="_blank">A1.3.1</a></strong> : Test d'intégration et d'acceptation d'un service.</li>
		        <li><strong><a class="myA" href="./documents/competences/docTechThingzMobileApp.png" target="_blank">A1.3.3</a></strong> : Accompagnement de la mise en place d'un nouveau service.</li>
		        <li><strong><a class="myA" href="#">A2.1.1</a></strong> : Accompagnement des utilisateurs dans la prise en main d'un service.</li>
		        <li><strong><a class="myA" href="#">A4.1.2</a></strong> : Conception et adaptation de l'interface utilisateur de l'application.</li>
		        <li><strong><a class="myA" href="./documents/competences/ionic-capture.png" target="_blank">A4.1.7</a></strong> : Développement, utilisation ou adaptation de composants logiciels.</li>		       	
		        <li><strong><a class="myA" href="./documents/competences/ionic-capture.png" target="_blank">A4.1.8</a></strong> : Réalisation de tests nécessaires à la validation.</li> <!-- explication preuve de concept -->
		        <li><strong><a class="myA" href="images/bitbucket_thingz.png" target="_blank">A5.1.1</a></strong> : Mise en place d'une gestion de configuration (Git).</li> 
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Avenant_Alexis_2eme_Annee.pdf#page=5" target="_blank">A5.2.4</a></strong> : Étude d‘une technologie, d'un composant, d'un outil ou d'une méthode.</li> 
		    </ul>
		</div>
	</div>
<?php } ?>

<?php 
	if($_GET["id"] == "birthday"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">Application gestion des bilans annuels Inovans</h2>
					<ul>
						<li>Conception d'une application web pour l'entreprise Inovans.</li>
	                    <li>Approfondissement de l'apprentissage du langage Angular.</li>
	                    <li>Apprentissage du langage JAVA (Spring-boot).</li>
	                    <li>Apprentissage du fonctionnement d'un modèle client - serveur RESTfull.</li>
	                    <li>Création et adaptation de la base de donnée de l'entreprise.</li>
	                    <li>Gestion des différentes versions du projet avec Git et Gitlab.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="birthdayDivImage">
			<img class="birthdayImage" src="images/birthday.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="#">A1.3.1</a></strong> : Tests d'intégration et d'acceptation d'un service.</li>
		        <li><strong><a class="myA" href="#">A1.4.1</a></strong> : Participation a un projet.</li>
		        <li><strong><a class="myA" href="./documents/competences/trello-inovans.PNG" target="_blank">A1.4.2</a></strong> : Évaluation des indicateurs de suivi d'un projet.</li>
		        <li><strong><a class="myA" href="#">A2.1.1</a></strong> : Accompagnement des utilisateurs dans la prise en main d'un service.</li>
		        <li><strong><a class="myA" href="#">A2.1.2</a></strong> : Evaluation et maintien de la qualité de services.</li>
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Alexis_2eme_Annee.pdf#page=16" target="_blank">A4.1.2</a></strong> : Conception et adaptation de l'interface utilisateur de l'application.</li>
		        <li><strong><a class="myA" href="./documents/rapports/Rapport_de_stage_Alexis_2eme_Annee.pdf#page=11" target="_blank">A4.1.3</a></strong> : Conception et adaptation de la base de donnée de l'application.</li>
		        <li><strong><a class="myA" href="./documents/competences/birthday-capture.png" target="_blank">A4.1.7</a></strong> : Développement, utilisation ou adaptation de composants logiciels.</li>
		        <li><strong><a class="myA" href="./documents/competences/birthday-gitlab.png" target="_blank">A5.1.1</a></strong> : Mise en place d'une gestion de configuration (Git).</li> 
		        <li><strong><a class="myA" href="https://angular.io/guide/styleguide" target="_blank">A5.2.1</a></strong> : Exploitation des referentiels, normes standards.</li> 
		        <li><strong><a class="myA" href="https://angular.io/docs" target="_blank">A5.2.3</a></strong> : Repérage des compléments de formations.</li> 
		        <li><strong><a class="myA" href="https://angular.io/docs" target="_blank">A5.2.4</a></strong> : Etude d'une technologie, d'un composant, d'un outil (Angular).</li> 
		    </ul>
		</div>
	</div>
<?php } ?>
<?php 
	if($_GET["id"] == "m2lstatique"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">PPE Site web presentation M2L</h2>
					<ul>
						<li>Conception d'un site web presentant la maison des ligues de lorraines.</li>
	                    <li>Apprentissage de HTML, CSS et JavaScript.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="staticDivImage">
			<img class="staticImage" src="images/M2L-static.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/competences/CDC-WEB-M2L.pdf" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire</li>
		        <li><strong><a class="myA" href="#">A1.2.2</a></strong> : Rédaction des spécifications techniques de la solution.</li>
		        <li><strong><a class="myA" href="#">A1.4.1</a></strong> : Participation a un projet.</li>
		        <li><strong><a class="myA" href="#">A1.4.2</a></strong> : Évaluation des indicateurs de suivi d'un projet.</li>
		    </ul>
		</div>
	</div>
<?php } ?>
<?php 
	if($_GET["id"] == "m2ldynamique"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">PPE Site web presentation M2L dynamique</h2>
					<ul>
						<li>Conception d'un site web presentant la maison des ligues de lorraines.</li>
						<li>Apprentissage de PHP.</li>
	                    <li>Approfondissement de l'apprentissage de HTML, CSS et JavaScript.</li>
	                    <li>Conception d'une base de donnée utilisateur.</li>
	                    <li>Gestion des versions du projets avec Git et GitHub.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="dynamiqueDivImage">
			<img class="dynamiqueImage" src="images/M2L.jpeg" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/competences/CDC-WEB-M2L-Dynamique.pdf" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire</li>
		        <li><strong><a class="myA" href="#">A1.2.2</a></strong> : Rédaction des spécifications techniques de la solution.</li>
		        <li><strong><a class="myA" href="#">A1.4.1</a></strong> : Participation a un projet.</li>
		        <li><strong><a class="myA" href="#">A1.4.2</a></strong> : Évaluation des indicateurs de suivi d'un projet.</li>
		        <li><strong><a class="myA" href="./documents/competences/static-github.png" target="_blank">A5.1.1</a></strong> : Mise en place d'une gestion de configuration (Git).</li> 
		    </ul>
		</div>
	</div>
<?php } ?>
<?php 
	if($_GET["id"] == "FREDI"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">PPE Site web presentation M2L</h2>
					<ul>
						<li>Conception d'un site web permettant la gestion des notes de frais des dons des adherents des clubs sportifs de la M2L.</li>
	                    <li>Approfondissement de l'apprentissage de HTML, CSS, JavaScript et PHP.</li>
	                    <li>Apprentissage du patron de conception MVC.</li>
	                    <li>Conception d'une base de donnée utilisateur.</li>
	                    <li>Gestion des versions du projets avec Git et GitHub.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="FrediDivImage">
			<img class="FrediImage" src="images/Fredi.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/competences/CDC_Fredi.pdf#page=2" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire.</li>
		        <li><strong><a class="myA" href="# DIAGRAMME DE CLASSE">A1.2.2</a></strong> : Rédaction des spécifications techniques de la solution.</li>
		        <li><strong><a class="myA" href="#">A1.4.1</a></strong> : Participation a un projet.</li>
		        <li><strong><a class="myA" href="./documents/competences/issues_fredi.png" target="_blank">A2.2.1</strong> : Suivi et résolution d'incident.</li>
		        <li><strong><a class="myA" href="./documents/competences/issues_fredi.png" target="_blank">A2.2.2</strong> : Suivi et réponse à des demandes d'assistance.</li>
		        <li><strong><a class="myA" href="# MONTRER LA PHOTO DE L'IHM" target="_blank">A4.1.2</a></strong> : Conception ou adaptation de l'interface utilisateur.</li>
		        <li><strong><a class="myA" href="./documents/competences/MLD_Fredi.png" target="_blank">A4.1.3</a></strong> : Conception et adaptation de la base de donnée de l'application.</li>
		        <li><strong><a class="myA" href="./documents/competences/Fredi-capture.PNG" target="_blank">A4.1.7</a></strong> : Développement, utilisation ou adaptation de composants logiciels.</li>
		        <li><strong><a class="myA" href="./documents/competences/Fredi-capture.png" target="_blank">A4.1.8</a></strong> : Réalisation de tests nécessaires à la validation.</li>
		        <li><strong><a class="myA" href="./documents/competences/docTechFredi.png" target="_blank">A4.1.9</a></strong> : Rédaction d'une documentation techniques.</li>
		        <li><strong><a class="myA" href="./documents/competences/docTechFredi.png" target="_blank">A4.1.10</a></strong> : Rédaction d'une documentation d'utilisation.</li>
		        <li><strong><a class="myA" href="./documents/competences/github-Fredi.png" target="_blank">A5.1.1</a></strong> : Mise en place d'une gestion de configuration (Git).</li> 
		        <li><strong><a class="myA" href="./documents/competences/github-Fredi.png" target="_blank">A5.1.3</a></strong> : Suivi d'une configuration et de ses éléments.</li> 
		    </ul>
		</div>
	</div>
<?php } ?>
<?php 
	if($_GET["id"] == "FREDIMOBILE"){
?>
	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">PPE Site web presentation M2L</h2>
					<ul>
						<li>Conception d'un site web permettant la gestion des notes de frais des dons des adherents des clubs sportifs de la M2L.</li>
	                    <li>Approfondissement de l'apprentissage de HTML, CSS, JavaScript et PHP.</li>
	                    <li>Apprentissage du patron de conception MVC.</li>
	                    <li>Conception d'une base de donnée utilisateur.</li>
	                    <li>Gestion des versions du projets avec Git et GitHub.</li>
	                </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="fh5co-bg-color" style="margin-top: 3%; margin-bottom: 3%;">
		<div class="FredimobileDivImage">
			<img class="FredimobileImage" src="images/Fredi-mobile.png" >
		</div>
	</div>

	<div id="fh5co-skills" class="fh5co-bg-dark">
		<div class="container">
			<ul class="myUl white">
		        <li><strong><a class="myA" href="./documents/competences/CDC_Fredimobile.pdf" target="_blank">A1.1.1</a></strong> : Analyse du cahier des charges d’un service à produire.</li>
		        <li><strong><a class="myA" href="#">A1.3.1</a></strong> : Test d'intégration et d'acceptation d'un service.</li>
		        <li><strong><a class="myA" href="#">A4.1.4</a></strong> : Définition des caractéristiques d'une solution applicative.</li>
		        <li><strong><a class="myA" href="#">A4.1.6</a></strong> : Gestion d'environement de developement et de tests.</li>
		        <li><strong><a class="myA" href="./documents/competences/Capture-fredimobile.PNG" target="_blank">A4.1.7</a></strong> : Développement, utilisation ou adaptation de composants logiciels.</li>
		        <li><strong><a class="myA" href="./documents/competences/docTechFredimobile.png" target="_blank">A4.1.9</a></strong> : Rédaction d'une documentation techniques.</li>
		        <li><strong><a class="myA" href="./documents/competences/github-Fredimobile.png" target="_blank">A5.1.3</a></strong> : Suivi d'une configuration et de ses éléments.</li> 
		        <li><strong><a class="myA" href="#">A5.2.4</a></strong> : Étude d‘une technologie, d'un composant, d'un outil ou d'une méthode.</li> 
		    </ul>
		</div>
	</div>
<?php } ?>
<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>
	
	<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Easy PieChart -->
<script src="js/jquery.easypiechart.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
</body>
</html>