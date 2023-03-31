<?php

include ("Viaje.php");
/*Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos. */ 


$viaje1 = new Viaje;

$viaje1 -> setCodigo(12345);
$viaje1 -> setCodigo("nuevo codigo");
echo "\nCodigo del viaje: " .$viaje1 ->getCodigo();

$viaje1 -> setDestino("Bariloche");
echo "\n Destino del viaje: " . $viaje1 -> getDestino();

$viaje1 -> setCantMaxPasajeros(5);
echo "\n La cantidad maxima de pasajeros es: " . $viaje1->getCantMaxPasajeros();



