<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>
		pokemon
	</title>
</head>

<body class="aff">

<?php 
	try{
        $bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8',
        'admin', 'azerty');
    }

    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }  
 
 ?>

	<?php 
		ini_set('display_errors', 1);

		require_once 'pokemon.class.php';
		require_once 'feunnec.class.php';
		require_once 'marisson.class.php';
		require_once 'grenousse.class.php';

		$marisson = new Marisson;
		$feunnec = new Feunnec;
		$grenousse = new Grenousse;

	?>

	<?php 

		if(isset($_GET["att1"])){
			$feunnec -> att1($marisson);

			$pv = $marisson -> pv;

			$query = "UPDATE pokemons SET pv = '" . $pv . "'
			WHERE nom = 'marisson'";

			$bdd->query($query);
		}

		if(isset($_GET["att2"])){
			$feunnec -> att2($marisson);

			$pv = $marisson -> pv;

			$query = "UPDATE pokemons SET pv = '" . $pv . "'
			WHERE nom = 'marisson'";

			$bdd->query($query);
		}	
	?>

	<div>
		<?php
			echo
			$marisson->afficher();

				$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 1');
		    	while($donnees=$reponse->fetch()){
		        	print '<div>' . $donnees['pv'] . '</div>';
		   		}
		?>
	</div>

	<div>
		<?php 
			echo
			$grenousse->afficher();

				$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 2');
		    	while($donnees=$reponse->fetch()){
		        	print '<div>' . $donnees['pv'] . '</div>';
		   		}
		?>
	</div>

	<div>
		<?php
			echo
			$feunnec->afficher();

				$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 3');
		    	while($donnees=$reponse->fetch()){
		        	print '<div>' . $donnees['pv'] . '</div>';
		   		}
		?>
	</div>

</body>
</html