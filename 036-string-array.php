<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="uno dos tres cuatro cinco seis siete";

#para convertir un string en array
$array_fecha1=explode("/",$fecha_1);
echo $array_fecha1[1]."<br>";

$array_fechas=explode("-",$fecha_2);
echo $array_fechas[2]."<br>";

$array_numeros=explode(" ",$numeros);
echo $array_numeros[5]."<br>";
?>