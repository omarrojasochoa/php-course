<?php

/*ARRAY TIPO ESCALAR*/
$saludo=array();
$saludo =["omar","pepe","jos"];
echo $saludo[0]; 
echo "<br>";


# ARRAY TIPO ASOCIATIVO
$tutor=array();
$tutor=[
  "nombre"=>"Omar",
  "apellido"=>"Rojas",
  "edad"=>27,
];
echo $tutor["edad"];
echo "<br>";


# ARRAY DE MULTIPLE DIMENSION
$tutor_2=array();
$tutor_2=[
  "nombre"=>"Omar",
  "apellido"=>"Rojas",
  "edad"=>27,
  "cursos"=>["php", "phyton", "js"]
];
echo $tutor_2["cursos"][0];
echo "<br>";
echo "<br>";
#contar elementos
echo count($tutor_2);
echo "<br>";
#contar elementos MULTIPLE DIMENSION
echo count($tutor_2,COUNT_RECURSIVE);


?>