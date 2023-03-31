<?php

include ("Viaje.php");

$viaje1 = new Viaje;

$viaje1 -> setCodigo(12345);
$viaje1 -> setCodigo("nuevo codigo");
echo "Codigo del viaje: " .$viaje1 ->getCodigo();


