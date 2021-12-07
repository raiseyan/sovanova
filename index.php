<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="styleAcceuil.css"/>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>sovanova</title>
	</head>
	<body>
		<div id="corpsPage">
			<header>
				<img src="images\logo.png" alt="Logo SOVA-NOVA" id="logo"/>
				<h2 id="slogan">LA PLANETE DES GAMERS</h2>
			</header>
			<section>
				<p id="presentation">
				Bonjour ou Bonsoir nous sommes SOVA-NOVA un groupe des programmeurs.<br/> 
				Nous sommes situé à Lubumbashi, en RDC, et nous offrons des jeux videos<br/> 
				pour les plateformes windows. Nous apprécions réellement les jeux d'une bonne<br/>
				qualité et nous accordons une grande importance au bien-etre et au plaisir du joueur.<br/>
				</p>
				<fieldset>
					<legend><h1>NOS JEUX</h1></legend>
					<fieldset>
						<legend><h2>LES LABYRINTHES version 1</h2></legend>
						<div id="labyrinthe1">
							<img src="images\labyrinthe1.bmp" alt="image labyrinthe1" class="imgJeu"/>
							<img src="images\CaptureLab1.png" alt="capture labyrinthe1" class="capture"/>
							<p>
								Tu sais te sortir des labyrinthes tout en gagnant des prix,<br/>
								Alors ce jeu est fait pour toi!
							</p>
							<p>
								<form method="get" action="fichiers\les_labyrinthes_setup.exe">
									<input type="submit" value="TELECHARGER" name="btLab1" class="bouton"/>
								</form>
							</p>
						</div>
					</fieldset>
					<fieldset>
						<legend><h2>LES LABYRINTHES version 2</h2></legend>
						<div id="labyrinthe2">
							<img src="images\labyrinthe2.bmp" alt="image labyrinthe2" class="imgJeu"/>
							<img src="images\CaptureLab2.png" alt="capture labyrinthe2" class="capture"/>
							<p>
								Les labyrinthes, les labyrinthes<br/> 
								Encore et toujours les labyrinthes!
							</p>
							<p>
								<form method="get" action="fichiers\les_labyrinthes_v2_setup.exe">
									<input type="submit" value="TELECHARGER" name="btLab2" class="bouton"/>
								</form>
							</p>
						</div>
					</fieldset>
				</fieldset>
				<aside>
					<fieldset>
						<legend><h1>À propos de SOVA-NOVA</h1></legend>
						<p>SOVA-NOVA est un groupe de developpeurs des jeux videos.</p>
						<p>Les jeux videos que nous proposons sont pour les plateformes windows.</p>
					</fieldset>
				</aside>
			</section>
			<footer>
				<div>
					<p id="contact">Nous contacter !</p>
					<a href="image.png"><img src="images/facebook.png" alt="Facebook" class="logo_rx"/></a>
					<a href="image.png"><img src="images/twitter.png" alt="Twitter" class="logo_rx"/></a>
					<a href="image.png"><img src="images/instagram.png" alt="instagram" class="logo_rx"/></a>
				</div>
				<p id="copyright">Copyright 2021 - Tous droits réservés</p>
			</footer>
		</div>
	</body>
</html>