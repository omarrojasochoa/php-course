<?php

  $cantidad_1=1453.11;
  $cantidad_2=831.63;

  #number_format(cantidad,decimales,sep_decima,sep_millar);

  $cantidad_1=number_format($cantidad_1,2,",",".");//pone el numero con 2 dcimales
  echo $cantidad_1;

?>