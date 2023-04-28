<?php
#Antes de usar "date", se configura la zona horaria.
date_default_timezone_set("America/Lima");


#lista de Date https://www.php.net/manual/es/function.date.php
echo date("d");//1-31 sin ceros

$fecha_us=date("Y/m/d");
$fecha_us=date("d-m-Y");
echo $fecha_us;
?>