<?php
// Write your code below:

/*function calculateTip($cost,$tip = 20){
  $total= $cost + ($tip*$cost/100);
  return "In total, you have to pay {$total} euros\n";
}

$my_cost = readline("Introduce total bill cost:");
print "You have to pay {$my_cost} euros\n";
$my_tip = readline("Introduce which tip you want to give:");
$total_tip = $my_tip * $my_cost / 100;
print "You want to give a tip of {$total_tip} euros\n";
print calculateTip($my_cost,$my_tip);*/

function calculateTip($cost,$tip = 20){
    $total= $cost + ($tip*$cost/100);
    return "In total, you have to pay {$total} euros\n";
  }
  
  echo "Introduce total bill cost:";
  fscanf(STDIN, "%s", $my_cost);
  echo "You have to pay {$my_cost} euros\n";
  echo "Introduce which tip you want to give:";
  fscanf(STDIN, "%s", $my_tip);
  $total_tip = $my_tip * $my_cost / 100;
  echo "You want to give a tip of {$total_tip} euros\n";
  echo calculateTip($my_cost,$my_tip);