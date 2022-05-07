<?php

// What is a variable

// Variable types

// Declare variables
$name ="Lujain";
$age= 28;
$height = 1.70;
$sallary = null;
// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
// Print types of the variables
echo gettype($name);
// Print the whole variable
var_dump($name,$age);
// Change the value of the variable
$name=false;
// Print type of the variable
echo gettype($name);

// Variable checking functions
is_string($name);
is_int($age);

// Check if variable is defined
isset($name);//true
isset($luj);//false
// Constants
define('PI',3014);
echo PI.'<br>';
// Using PHP built-in constants

