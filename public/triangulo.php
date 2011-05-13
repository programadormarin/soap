<?php
require '../application/Triangulo.php';

$soap = new SoapServer(__DIR__ . '/../resources/Triangulo.wsdl');
$soap->setClass('Triangulo');
$soap->handle();