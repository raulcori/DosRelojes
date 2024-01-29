<?php

include_once './RelojEstandar.php';
include_once './RelojPremium.php';

// Casos de Prueba
$relojEstandar = new RelojEstandar();
$resultado     = $relojEstandar->getGastoEnergetico(0);
echo 'Reloj Estandar  (0seg)     : ' . $resultado . "\n";
$resultado = $relojEstandar->getGastoEnergetico(4);
echo 'Reloj Estandar (4seg)      : ' . $resultado . "\n";

$relojPremium = new RelojPremium();
$resultado    = $relojPremium->getGastoEnergetico(0);
echo 'Reloj Premium  (0seg)      : ' . $resultado . "\n";
$resultado = $relojPremium->getGastoEnergetico(4);
echo 'Reloj Premium (4seg)       : ' . $resultado . "\n";


// Completar con resolucion de punto 2
$segundos_de_un_dia = 60 * 60 * 24;
$estandar = $relojEstandar->getGastoEnergetico($segundos_de_un_dia);
$premium  = $relojPremium->getGastoEnergetico($segundos_de_un_dia);
$ahorro = $estandar - $premium;
echo 'Ahorro Premium vs Estandar : ' . $ahorro . "\n";
