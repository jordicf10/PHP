<?php

echo "Introduce number to do multiply table: ";
fscanf(STDIN, "%s", $num);
for($i=1;$i<=10;$i++){
  $result = $num * $i;
  echo $num . " * " . $i . " = " . $result;
  echo "\n";
}