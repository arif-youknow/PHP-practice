<?php

$role = 'admin';
$massage = "welcome..";

switch($role){

  case 'admin':
    echo $massage . $role . "\n";
    die("ends here\n");  //similar as break

  case 'user':
    echo $massage . $role . "\n";
    break;
  
  default:
    echo "this is default value\n";
}