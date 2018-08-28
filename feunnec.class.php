<?php 
	
	class Feunnec extends Pokemon
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

			$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 2');
		    	$donnees=$reponse->fetch();
		   		
			$this->type = 'feu';
			$this->nom = 'feunnec';
			$this->pv = $donnees['pv'];
			$this->attack1 = 'griffe';
			$this->attack2 = 'charbon mutant';
			$this->faiblesse = 'eau x2';
			$this->carte = 'feunnec.jpeg';
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