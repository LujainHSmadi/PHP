<?php
 
function checkYear($year)
{
    // If a year is multiple of 400,
    // then it is a leap year
    if ($year % 400 == 0)
        print("Leap Year");
         
    // Else If a year is multiple of 100,
    // then it is not a leap year
    else if ($year % 100 == 0)
        print("Not a Leap Year");
             
    // Else If a year is multiple of 4,
    // then it is a leap year
    else if ($year % 4 == 0)
        print("Leap Year");
         
    else
        print("Not a Leap Year<br>");
}
 
// Driver code
$year = 2013;
 
checkYear($year);

// **********************************

function seasone($temp){
    if($temp < 20){
        echo "winter";
    }
    else
     echo "summer <br>";
}

seasone(27);

function sum($firstInteger  , $secondInteger ){

if($firstInteger == $secondInteger )
    $output = ($firstInteger + $secondInteger)*3;
    return $output;
}

echo(sum(2,2));