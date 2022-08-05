<?php
	class rectangulo extends figura implements formulas{
		private $lado1;   //Largo del rectangulo
		private $lado2;   //Ancho del rectangulo

		// CONSTRUCTOR
		function __construct($l1, $l2) {			
			$this->lado1 = $l1;
			$this->lado2 = $l2;
			$this->tipo = get_class($this);
	    }

		//Override
		public function GetArea() {
			return $this->a;
		}

		//Override
		public function GetPerimetro() {
			return $this->p;
		}

		//Override
		public function GetTipo() {
			return $this->tipo;
		}
		
		//Override
		public function area() {
			$this->a = $this->lado1 * $this->lado2;
		}
		
		//Override
		public function perimetro() {
			$this->p = ($this->lado1 + $this->lado2) * 2;
		}		
	}
?>
