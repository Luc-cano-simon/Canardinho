<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
	<title>Canard</title>
</head>
<body>

	<h1> Les coins coins Gersois du canard </h1>



	<?php 
	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=ref;charset=utf8','luc', 'lucho1803');
	}

	catch (Exception $e){

		die('Erreur : ' . $e->getMessage());
	}  

	?>




	<table class="table table-hover">
		<thead>
			<th>id</th>
			<th>Nom du referenceur</th>
			<th>Nombre de canard aperçu</th>
			<th>Date</th>
			<th>Heure</th>
			<th>localisation</th>
		</thead>


		<?php 
		$reponse = $bdd->query('SELECT * FROM canard');
		while($donnees=$reponse->fetch()){
			echo 
			'<tr>
			<td>' . $donnees['ID'] . '</td><td>' . $donnees['nom'] . '</td>' . '<td>' . $donnees['nombre'] . '</td><td>' . $donnees['date'] . '</td><td>' . $donnees['heure'] . '</td><td>' . $donnees['localisation'] . '</td>
			</tr>' ;
		}
		?>


	</table>

	<!-- Redirection vers la page Ajouter Ref Canard -->
	<div>
		<a  id="add" class="btn waves-effect waves-light pulse" href="form.php">Ajouter un réferencement
			<i class="material-icons right"></i>
		</a>
	</div>
	









</body>
</html>