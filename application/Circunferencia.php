<?php
class Circunferencia
{
	public $raio, $diametro, $perimetro, $area;
}

class Circulo
{
	public function calcula($raio)
	{
		$c = new Circunferencia();
		$c->raio = $raio;
		$c->diametro = (2 * $raio);
		$c->perimetro = (2 * $raio * 3.14);
		$c->area = (3.14 * pow($raio, 2));
		
		return $c;
	}
}