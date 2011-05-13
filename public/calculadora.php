<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../');

require 'application/Calculadora.php';

$server = new SoapServer(__DIR__ . '/../resources/Calculadora.wsdl');
$server->setClass('Calculadora');
$server->handle();