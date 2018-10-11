<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validation de l'inscription</title>
	</head>
		<body>
			<h1>
				Récapitulatif de la saisie
			</h1>
			<?php
				$nom=$_POST["nom"];
				$prenom=$_POST["prenom"];
				$date_n=$_POST["date-naissance"];
				$date_i=$_POST["date-inscription"];
				echo "Nom : "."$nom <br/>"
				."Prénom : "."$prenom <br/>"
				."Date de Naissance : "."$date_n <br/>"
				."Date d'inscription : "."$date_i <br/>";
				date_default_timezone_set('Europe/Paris');
				$date=date("d\-m\-Y");
				echo "<br/> la date est "."$date"."<br/>";
 			?>
		</body>
</html>