<?php

//1*2*3*4=24

function fatorial($n) {
  if ($n>0)
    $fat = 1;
    for ($i = $n; $i=1; $i = $i-1){
      $fat = $fat*$i;
    };
  
  return fat;
}

$var = fatorial (4); 

echo $var;