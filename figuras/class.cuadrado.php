<?php
	class cuadrado extends figura implements formulas {
		private $lado;   //Lados del cuadrado

		// CONSTRUCTOR
		function __construct($l1) {		
			$this->lado = $l1;
			$this->tipo = get_class($this);
	    }

		//Override
		public function GetArea() {
			return $this->ar;
		}

		//Override
		public function GetPerimetro() {
			return $this->per;
		}

		//Override
		public function GetTipo() {			
			return $this->tipo;
		}
		
		//Override
		public function area() {
			$this->ar = $this->lado * $this->lado;
		}
		
		//Override
		public function perimetro() {
			$this->per = $this->lado * 4;
		}
	}
?>
