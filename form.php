<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
</head>
<body>


	<?php 

	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=ref;charset=utf8',
			'luc', 'lucho1803');
	}

	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if(empty($_POST['nom']) && empty($_POST['nombre'] && empty($_POST['date']&& empty($_POST['heure']&& empty($_POST['localisation'])))))
	{
		echo "";
	}

	else
	{ 
		header('Location: accueil.php');
		$nom = $_POST['nom'];
		$nombre = $_POST['nombre'];
		$date = $_POST['date'];
		$heure = $_POST['heure'];
		$localisation = $_POST['localisation'];
		$bdd->query("INSERT INTO canard (nom, nombre, date, heure, localisation)
			VALUES ('$nom', '$nombre', '$date', '$heure', '$localisation')");

	// }
		// var_dump($nom);
		// var_dump($nombre);
		// var_dump($date);
		// var_dump($heure);
		// var_dump($localisation);
	}


	?>

	<form method="POST">
		<p> Votre nom </p>
		<input type="text" name="nom" placeholder="Veuillez entrer votre nom">
		<p> nombre de canards aperçu </p>
		<input type="text" name="nombre" placeholder="nombre">
		<p> Date du réferencement  </p>
		<input type="date" name="date" placeholder="Date">
		<p> L'heure du réferencement  </p>
		<input type="time" name="heure" placeholder="Heure">
		<p> Localisation du réferencement  </p>
		<input type="text" name="localisation" placeholder="localisation">
		<div id="but" >
			<button type="submit" id="buton" >Ajouter</button>
		</div>
	</form>
	

	<div class="return">
		<a href="accueil.php">Retour au réferencement</a> 
	</div>



</body>
</html>