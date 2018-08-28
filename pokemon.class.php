<?php 

	class Pokemon 
	{
		public $type;
		public $nom;
		public $pv;
		public $attack1;
		public $attack2;
		public $faiblesse;
		public $carte;

		public function __construct($ty, $no, $pvv, $att1, $att2, $faib, $car)
		{
			$this->type = $ty;
			$this->nom = $no;
			$this->pv = $pvv;
			$this->attack1 = $att1;
			$this->attack2 = $att2;
			$this->faiblesse = $faib;
			$this->carte = $car;
		}

		public function afficher()
		{
			if( $this->pv > 0 )
			{
				print '<img class="cartepok" src="' . $this->carte . '" >';

				print 
				"<div>
					<form method='GET'>
						<button name='att1' type='submit'>att1</button>
						<button name='att2' type='submit'>att2</button>
					</form>
				</div>";
			}
			else
			{
				print $this->nom . " est mort!";
			}
		}
	}

	?>