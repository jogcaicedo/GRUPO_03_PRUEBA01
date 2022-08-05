<?php
	class triangulo extends figura implements formulas{
		private $lado1;   //Primer lado del triangulo
		private $lado2;   //Segundo lado del triangulo
		private $lado3;   //Tercer lado del triangulo


		// CONSTRUCTOR
		function __construct($l1, $l2, $l3) {
			$this->lado1 = $l1;
			$this->lado2 = $l2;
			$this->lado3 = $l3;
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
			$this->perimetro(); 						//Perimetro
			$semi = $this->GetPerimetro()/2;            //Semiperimetro
			$this->a = number_format(sqrt($semi * ($semi - $this->lado1) * ($semi - $this->lado2) * ($semi - $this->lado3)), 2);
		}
		
		//Override
		public function perimetro() {
			$this->p = $this->lado1 + $this->lado2 + $this->lado3;
		}
	}
?>

