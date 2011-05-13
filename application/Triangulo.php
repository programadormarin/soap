<?php

class Triangulo {
	public function buscaTipoTriangulo($lado1, $lado2, $lado3)
	{
		if ($lado1 == $lado2 && $lado1 == $lado3) {
			return 'Equilátero';
		} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
			return 'Isósceles';
		} else {
			return 'Escaleno';
		}
	}
	
	public function calculaArea($base, $altura)
	{
		return $base * $altura / 2;
	}
}