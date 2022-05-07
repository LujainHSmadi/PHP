<?php
// single line
#single line
/* Multi line */





    // /*** Ternary operator ***/
    // $expr1 = 7 < 10;
    // $expr2 = "New y value if expr1 is true";
    // $expr3 = "New y value if expr1 is false";

    // //$y takes the value of $expr3 because $expr1 is false
    // $y = $expr1 ? $expr2:$expr3;
    // echo $y;

    /**** Null coalescing operator ****/
    echo "\n";
    //set varexp1 value to null
    $varexp1 =1 ;

    // set varexp2 value to string.
    $varexp2 = "new z value as varexp1 is null";

    $z = $varexp1 ?? $varexp2; 
    echo $z;

