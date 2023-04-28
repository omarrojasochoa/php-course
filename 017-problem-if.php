<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
#Realizar un programa donde se pida la edad del usuario, si es mayor aparece un mensaje
  $edad=2;
  if($edad>=18){
    echo "Si es mayor de edad, ya que tiene: ".$edad." años de edad";
  } else {
    echo "No es mayor de edad, ya que tiene: ".$edad." años de edad";
  }
echo "<br>";
#en un almacen se hace un 20% de dsct a los clientes que compren 100$, Cual sera la cantidad que pagara una persona?
  $total=101;
  if($total>=100){
    $total=$total-0.2*$total;
    echo "El total es: s/.".$total;
  }
?>
</body>
</html>