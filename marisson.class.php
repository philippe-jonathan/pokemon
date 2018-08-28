<?php 

	class Marisson extends Pokemon
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

			$reponse = $bdd->query('SELECT * FROM pokemons WHERE id = 1');
		    	$donnees=$reponse->fetch();

			$this->type = 'herbe';
			$this->nom = 'marisson';
			$this->pv = $donnees['pv'];
			$this->attack1 = 'fouet lianes';
			$this->attack2 = 'canon graine';
			$this->faiblesse = 'feu x2';
			$this->carte = 'marisson.jpeg';
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