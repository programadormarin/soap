<?php
$service = new SoapClient('http://localhost/soap/public/triangulo.php?wsdl');
echo $service->buscaTipoTriangulo(3, 2, 1);