<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro		
		
		public static function get_form(){			
			$html = '
			<br><br>
			<div class="container">
			<div style="text-align: center;">
			<form name="figuras" method="POST" action="" >
			<table align="center" style="text-align:center;width: 25%;border:2px solid #006699; border-radius: 3px;">
				<tr>
					<th colspan="2" style="text-align:center;">INGRESO DATOS DE LA FIGURA<br><br></th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select name="tipo" OnChange="habilitarCaja();">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3"size="4" disabled></td>
				</tr>		
				<tr>
					<th colspan="2" style="text-align:center;"><br><input type="submit" name="calcular" value="Calcular"><br><br></th>
				</tr>
			</table>
			</form>
			</div>
			</div>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
