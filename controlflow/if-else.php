<?php

$age = 18;
$isMale = false;

if($age<18){
  echo "Can not go outside with friends\n";
}
else{
  echo "Can go outside with friends\n";
}

if($age==18 && !$isMale){
  echo "can go out\n";
}
if($age>=18 || $isMale){
  echo "can not go out\n";
}

$num1 = 10;
$num2= 11;

if($num1>$num2){

  echo "$num1 is Grater\n";
}
else if($num1<$num2){
  echo "$num2 is Grater\n";
}

