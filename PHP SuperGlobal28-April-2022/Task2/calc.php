<?php
// if (isset($_POST['op'])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $operation = $_POST["op"];
   
    switch ($operation) {
        case '+':
            $ans = $num1 + $num2;
            break;
        case '-':
            $ans = $num1 - $num2;
            break;
        case '*':
            $ans = $num1 * $num2;
            break;
        case '/':
            $ans = $num1 / $num2;
            break;

    }
echo $ans;


