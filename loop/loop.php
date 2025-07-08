<?php

//for loop
$number = 1;

for( $i = $number; $i<11; $i++){
  echo $i . "\t";
}

echo "\n";

//while loop
while($number<10){
  echo $number . "\t";
  $number++;
}
echo "\n";

//do while

$demoNumber = 0;

do{

  $demoNumber+=1;
  echo $demoNumber . "\n";
} while($demoNumber<1);
