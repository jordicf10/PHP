<?php

function series_sum($n) {
  $n = round((string)$n);
  $num1= "1";
  echo "Series: ";
  echo $num1;
  $divisor = $num1;
  $sum= "1";
  
  for($i=1;$i<$n;$i++){
    
    echo " + {$num1}/{$divisor}";
    $sum+= $num1/$divisor;
    $sum = (string)$sum;
    $divisor+= "3";
    $divisor = (string)$divisor;
  }
  
  $total=(string)$sum;
    if($total=="0"){
     echo number_format($total, 2);
    }
    $est = round($total,2);
    $totall = (string)$est;
    echo "\n";
    echo $totall;
}

$serial = readline("How many long do you want to give to your serial number:");
$result = (string)series_sum($serial);
echo $result;
$tipo = gettype($result);
echo "\n";
echo $tipo;