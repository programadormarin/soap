<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/../');

require 'application/Circunferencia.php';

$server = new SoapServer(__DIR__ . '/../resources/Circunferencia.wsdl');
$server->setClass('Circulo');
$server->handle();