<?php

$cadena_texto="hola mundo";

#Mayusculas y Minusculas.
echo strtolower($cadena_texto)."<br>"; //hola mundo
echo strtoupper($cadena_texto)."<br>"; //HOLA MUNDO
echo ucfirst($cadena_texto)."<br>"; //Hola mundo
echo ucwords($cadena_texto)."<br>"; //Hola Mundo

#Contar Caracteres
$longitud=strlen($cadena_texto);
echo $longitud."<br>";//10

#cantidad de palabras.
$palabras=str_word_count($cadena_texto);
echo $palabras."<br>";//2


?>