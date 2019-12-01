<?php
require_once 'class.service.php'; 
?>
<html>
	<head>
		<title>Résultat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="gsb.png" id="logo">
		<fieldset id="resultat">
			<legend>Résultat</legend>
		<?php




		$service = new Service($_POST['services']);

		


		//$services = new Service();
		echo "<p><h3>Nom :</h3> ".$form_nom = $_POST['nom']."</p>";
		echo "<p><h3>Prenom :</h3> ".$form_prenom = $_POST['prenom']."</p>";
		echo "<p><h3>Code d'employé :</h3>".$form_code_employe = $_POST['code_employe']."</p>";
		echo "<p><h3>Responsable :</h3>".$form_responsable = $_POST['responsable']."</p>";
		echo "<p><h3>Mail du responsable :</h3>".$form_mail_responsable = $_POST['mail_responsable']."</p>";


		if (isset($_POST['pc_portable'])) {
		    
			echo "<p><h3>PC portable :</h3>Besoin</p>";

		}else{

			echo "<p><h3>PC portable :</h3>Pas Besoin</p>";

		}

		if (isset($_POST['smartphone'])) {
		    
			echo "<p><h3>Smartphone :</h3>Besoin</p>";

		}else{

			echo "<p><h3>Smartphone :</h3>Pas Besoin</p>";

		}

		if (isset($_POST['station_travail'])) {
		    
			echo "<p><h3>Station de travail :</h3>Besoin</p>";

		}else{

			echo "<p><h3>Station de travail :</h3>Pas Besoin</p>";

		}

		if (isset($_POST['ecran_2'])) {
		    
			echo "<p><h3>2ème ecran :</h3>Besoin</p>";

		}else{

			echo "<p><h3>2ème ecran :</h3>Pas Besoin</p>";

		}
			
		
		echo "<p><h3>Date limite :</h3>".$form_deadline = $_POST['deadline']."</p>";

		echo "<p><h3>Site :</h3>".$form_sites = $_POST['site']."</p>";

        echo "<p><h3>Services :</h3>".$service->getLibelle()."</p>";

		?>
		</fieldset>

	</body>
</html>