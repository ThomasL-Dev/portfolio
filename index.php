<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" href="img/icon.png" />
</head>
<body>
	<div class="bandeau">

		<div id="title-bandeau">
			<h1>LEGAY THOMAS</h1>
			<img src="img/ul.png" id="underline">
		</div>

		<div id="div-btn-bandeau">
			<input type="submit" id="btn-bandeau" value="Acceuil" onclick="window.location='./index.php';">
			<!--<input type="submit" id="btn-bandeau" value="Développement" onclick="window.location='/dev.php';">-->
			<input type="submit" id="btn-bandeau" value="à Propos" onclick="window.location='./aboutme.php';">
		</div>
		
		<div id="res-btn-bandeau">
			<div id="res-link">
				<a href="https://github.com/ThomasL-Dev/">
					<img id="github-img" src="img/github.png"/>
				</a>
				
				<a href="https://www.linkedin.com/in/thomas-legay-b5b634171/">
					<img id="linkdin-img" src="img/linkdin.png"/>
				</a>
			</div>
		</div>

		<div id="footer">
			Copyright © 2019 - Legay Thomas
		</div>

		<div id="div-img-bandeau">
			<img src="img/t.jpg" id="img-bandeau">
		</div>
		
	</div>	





	<div id="main">

		<a href="gamelist.php">
			<img id="gb-img" src="img/gb.png"/>
		</a>
		
		<div id="start">
			<img id="start-img" src="img/start1.jpg">
				
				<h2 id="aboutme">En savoir plus sur moi !</h2>
				
				<a href="#presentation">
					<img id="goto-presentation-img" src="img/icon1.png"/>
				</a>
		</div>	
		
		<div id="presentation">

			<div id="presentation-text">
				<h1 id="presentation-title"><u>Compétences</u></h1>
			</div>

			<div id="div-img-competence">
				
				<div id="compet1">
					<p>python</p>
					<img id="img-competence" src="img/python.png">
				</div>

				<div id="compet2">
					<p>java/android</p>
					<img id="img-competence" src="img/java.png">
				</div>

				<div id="compet3">
					<p>php</p>
					<img id="img-competence" src="img/php.png">
				</div>

				<div id="compet4">
					<p>html</p>
					<img id="img-competence" src="img/html.png">
				</div>

				<div id="compet5">
					<p>css</p>
					<img id="img-competence" src="img/css.png">
				</div>


			</div>

			<div id="compet6">
				<p id="text-os-l">linux</p>
				<img id="img-competence" src="img/linux.png">
			</div>

			<div id="compet7">
				<p id="text-os-w">windows</p>
				<img id="img-competence" src="img/windows.png">
			</div>

			<img id="presentation-img" src="img/t2.jpg">

		</div>	
			




		<div id="projet">

			<div id="projet-text">

				<h1 id="projet-title"><u>Projet(s)</u></h1>		

			</div>

			<script>
				function showDescription(divName) {
					  var x = document.getElementById(divName);
					  x.style.display === "none"
					  if (x.style.display === "block") {
					    x.style.display = "none";
					  } else {
					    x.style.display = "block";
					  }
				}
			</script>

			<div id="projet-explain">

				<div id="projet-affichage">
					<p id="projet">
						<img src="img/icojarvis.png" id="ico-projet"> <button id="btn-projet" onclick="showDescription('desc-1')">Assistant Personnel</button>
					</p>

					<p id="projet">
						<img src="img/icon.png" id="ico-projet">  <button id="btn-projet" onclick="showDescription('desc-2')">Le Portfolio</button>
					</p>

					<p id="projet">
						<img src="img/site.png" id="ico-projet">  <button id="btn-projet" onclick="showDescription('desc-3')">GSB site vitrine</button>
					</p>

					<p id="projet">
						<img src="img/site.png" id="ico-projet">  <button id="btn-projet" onclick="showDescription('desc-4')">GSB gestion du materiel</button>
					</p>

					<p id="projet">
						<img src="img/app.png" id="ico-projet">  <button id="btn-projet" onclick="showDescription('desc-5')">GSB app</button>
					</p>

					<p id="projet">
						<img src="img/app.png" id="ico-projet">  <button id="btn-projet" onclick="showDescription('desc-6')">GSB gestion des medicaments</button>
					</p>

				</div>

			</div>

			<div class="affiche-desc" id="desc-1">
				Description
				Assistant Personnel
				<a id="desc-link" href="https://github.com/ThomasL-Dev/jarvis">Lien GitHub</a>
			</div>

			<div class="affiche-desc" id="desc-2">
				Description
				Portfolio
				<a id="desc-link" href=""></a>
			</div>

			<div class="affiche-desc" id="desc-3">
				Description
				GSB site vitrine
				<a id="desc-link" href="./projets/site_vitrine_gsb">Voir</a>
			</div>

			<div class="affiche-desc" id="desc-4">
				Description
				gsb gestion materiel
				<a id="desc-link" href="./projets/site_gestion_materiel">Voir</a>
			</div>

			<div class="affiche-desc" id="desc-5">
				Description
				GSB app
				<a id="desc-link" href="https://github.com/ThomasL-Dev/gsb_app_test">Lien GitHub</a>
			</div>

			<div class="affiche-desc" id="desc-6">
				Description
				GSB gestion medic
				<a id="desc-link" href="https://github.com/ThomasL-Dev/">Lien GitHub</a>
			</div>

			<img id="projet-img" src="img/t3.jpg">

		</div>
	</div>
</body>
</html>