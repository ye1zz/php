<?php
  $ilosc= rand(5,15);
  $liczby=  Array();
    for ($i=0; $i < $ilosc ; $i++) {
      $liczby[$i]= rand(10,20);
    }
    for ($i=0; $i < $ilosc; $i++) {
      echo "$liczby[$i] ; ";
    }
      echo "<br>";

      $min= $liczby[0];
      $max= $liczby[0];
        for ($i=0; $i < $ilosc; $i++) {
          if ($liczby[$i]<$min) $min= $liczby[$1]
            if ($liczby[$i]<$max) $max= $liczby[$1]
        }
 ?>
