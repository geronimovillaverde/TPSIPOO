<?php

include ("Viaje.php");

$viaje1 = new Viaje;

$viaje1 -> setCodigo(12345);
echo "Codigo del viaje: " .$viaje1 ->getCodigo();


