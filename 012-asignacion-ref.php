<?php
$texto="Argu";

$var_1=$texto;
$var_2=&$texto; //$var_2 va cambiar cada qe cambie $texto

echo $var_2;

$texto="Omar";
echo $var_2;
