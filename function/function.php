<?php

function welcome(){

  echo "Hello from function\n";
}

welcome();

function welcomeUser($username){
  echo "welcome.. $username \n";
}

welcomeUser("admin");

function sum($num1, $num2){
  return $num1+$num2;
}

$result = sum(5,8);

echo "this is from sum function $result\n";
