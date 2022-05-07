<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums
function sum(...$nums){
    $sum=0;
    foreach($nums as $num){
        $sum += $num;
    }
    echo $sum;
}
sum(1,1,2,3,5,4,8,8);
// Arrow functions
function sum2(...$nums){
    //return array_reduce($array, fn($sum, $arrayElement) => $carry + $n);

    return array_reduce($nums,fn($sum,$n)=>$sum+ $n);
}
echo "<br>".sum2(1,1,2,3,5,4,8,8);