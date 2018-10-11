<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validation de l'ajout</title>
	</head>
		<body>
			<h1>
				Récapitulatif de la saisie
			</h1>
			<?php
				$nom=$_POST["nom"];
				echo "Nom : "."$nom <br/>";
				date_default_timezone_set('Europe/Paris');
				$date=date("d\-m\-Y");
				echo "<br/> la date est "."$date"."<br/>";
 			?>
		</body>
</html>