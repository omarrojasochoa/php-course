<?php

$laptop=["hp","windows10","SSD 250Gb", "Ram16gb"];

$frutas=[
  "fresas"=>10,
  "naranjas"=>4,
  "sandias"=>32,
  "manzanas"=>51
];

foreach ($laptop as $value) {
  echo $value."<br />";
}

echo "<br />";

foreach ($frutas as $key=>$value) {
  echo $key." - ".$value."<br />";
}

echo "<br />";
$productos=[
  ["codigo"=>"A0001","descripcion"=>"mouse"],
  ["codigo"=>"A0002","descripcion"=>"teclado"],
  ["codigo"=>"A0003","descripcion"=>"monitor"],
  ["codigo"=>"A0004","descripcion"=>"cpu"],
];

foreach ($productos as $value) {
  # code...
  echo $value["codigo"]." - ".$value["descripcion"]."<br>";
}

?>