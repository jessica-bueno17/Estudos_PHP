<?php

$vetor = [1,1]; 

for($i = 3; $i <= 10; $i++) {      
  $fn = $vetor[$i-2] + $vetor[$i-3];  
  $vetor[] =$fn; 
} 

//var_dump ($vetor);

//print_r($vetor);

echo " ====== Dez primeiros Elementos da Sequência de Fibonacci. " . PHP_EOL;

foreach ($vetor as $elemento) {
  echo $elemento. PHP_EOL;
}

