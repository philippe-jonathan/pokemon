<?php 

	class Grenousse extends Pokemon
	{
		public function __construct()
		{
			try{
        		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8',
        		'admin', 'azerty');
    		}

   			catch (Exception $e){
        		die('Erreur : ' . $e->getMessage());
    		}  

			$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 3');
		    	$donnees=$reponse->fetch();
		   		
			$this->type = 'eau';
			$this->nom = 'grenousse';
			$this->pv = $donnees['pv'];
			$this->attack1 = "écras'face";
			$this->attack2 = 'goutte a goutte';
			$this->faiblesse = 'herbe x2';
			$this->carte = 'grenousse.jpeg';
		}

		public function att1($a1)
		{
			$a1 -> pv = $a1 -> pv - 10;
			
		}

		public function att2($a2)
		{
			$a2 -> pv = $a2 -> pv - 20;
		}
	}

 ?>