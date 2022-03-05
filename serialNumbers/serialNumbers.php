<?php

function series_sum($n) {
  $n = round($n);
  $num1= 1;
  echo "Series: ";
  echo $num1;
  $divisor = $num1;
  $sum= 1;
  
  for($i=1;$i<=$n;$i++){
    
    echo " + {$num1}/{$divisor}";
    $sum+= $num1/$divisor;
    $divisor+= 3;
  }
  
  $total=(string)$sum;
    if($total=="0"){
     echo number_format($total, 2);
    }
    $totall = round($total,2);
    echo "\n";
    echo $totall;
}

echo series_sum(4);