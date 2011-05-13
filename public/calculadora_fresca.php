<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../');

require 'application/Calculadora.php';
require 'application/CalculadoraFresca.php';

$server = new SoapServer(__DIR__ . '/../resources/CalculadoraFresca.wsdl');
$server->setClass('CalculadoraFresca');
$server->handle();