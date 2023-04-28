<?php
  #operador ternario

  (9<7)?$total=1+2 : $total=2*5;
  echo $total;
  echo "<br>";

  #Ejemplo
  $numero_camisas=5;
  $precio_camisas=20;
  $total=$numero_camisas*$precio_camisas;

  ($numero_camisas>=3)?$total*=0.8:$total*=0.9;
  echo "El precio total de las camisas es: s/".$total;
  
?>