<?php

$nom = $_GET['nom'];
$edat = $_GET['edat'];


$ara = date("Y");


$edat_2050 = $edat + (2050 - $ara);

echo "Hola, $nom! Tindràs $edat_2050 anys al 2050.";
?>
