<?php
class Resultado
{
	public $num1, $num2, $total;
}

class CalculadoraFresca extends Calculadora
{
	public function soma($num1, $num2)
	{
		$resultado = new Resultado();
		$resultado->num1 = $num1;
		$resultado->num2 = $num2;
		$resultado->total = parent::soma($num1, $num2);
		
		return $resultado;
	}
	
	public function subtrai($num1, $num2)
	{
		$resultado = new Resultado();
		$resultado->num1 = $num1;
		$resultado->num2 = $num2;
		$resultado->total = parent::subtrai($num1, $num2);
		
		return $resultado;
	}
	
	public function multiplica($num1, $num2)
	{
		$resultado = new Resultado();
		$resultado->num1 = $num1;
		$resultado->num2 = $num2;
		$resultado->total = parent::multiplica($num1, $num2);
		
		return $resultado;
	}
	
	public function divide($num1, $num2)
	{
		$resultado = new Resultado();
		$resultado->num1 = $num1;
		$resultado->num2 = $num2;
		$resultado->total = parent::divide($num1, $num2);
		
		return $resultado;
	}
}