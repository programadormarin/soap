<?php
class Calculadora
{
	/**
	 * @param float $num1
	 * @param float $num2
	 * @return float
	 */
	public function soma($num1, $num2)
	{
		return $num1 + $num2;
	}
	
	/**
	 * @param float $num1
	 * @param float $num2
	 * @return float
	 */
	public function subtrai($num1, $num2)
	{
		return $num1 - $num2;
	}
	
	/**
	 * @param float $num1
	 * @param float $num2
	 * @return float
	 */
	public function multiplica($num1, $num2)
	{
		return $num1 * $num2;
	}
	
	/**
	 * @param float $num1
	 * @param float $num2
	 * @return float
	 */
	public function divide($num1, $num2)
	{
		if ($num2 == 0) {
			throw new SoapFault('Server', 'O divisor não pode ser zero!');
		} 
		
		return $num1 / $num2;
	}
}