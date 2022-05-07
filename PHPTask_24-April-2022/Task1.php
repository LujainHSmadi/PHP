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
// **********************************

function sum($firstInteger  , $secondInteger ){

if($firstInteger == $secondInteger )
    $output = ($firstInteger + $secondInteger)*3;
    return $output;
}

echo(sum(2,2));
// **********************************

function sum2($firstInteger,$secondInteger){
    if(($firstInteger + $secondInteger)==30){
        echo " <br>false <br>";
    }
    else
    echo "<br> true <br>";
}
sum2(10,10);
// **********************************

function positive($number){
    if($number%3 > 0){
        return "true";
    }
    else
    return "flase";

}

echo "<br>".positive(20)."<br>";
// **********************************

function num($num){
    if($num >20 && $num<50){
        return true;
    }
    else return flase;
}
// **********************************

function largest_number($arr){
    $max = $arr[0];
    for($i = 1; $i<3;$i++){
        if($max<$arr[$i])
        $max = $arr[$i];
        

    }
    return $max;

}
$arr1 = array(1,5,9);
echo largest_number($arr1)."<br>";

$units = 300;
$bill = 0.0;

function billCount($units){
if($units != 0){
    if($units < 51){
        $bill = $units * 2.5;
    }else{
        $bill = 50 * 2.5;
        if($units < 101 ){
            $units -= 50;
            $bill += $units * 5;
        }else{
            $bill += 50 * 5;
            if($units < 251){
                $units -= 100;
                $bill += $units * 6.20;
            }else{
                $bill += 150 * 6.2;
                if($units >= 251){
                    $units -= 250;
                    $bill += $units * 7.50;
                }
            }
        }
    }
}
return $bill;
}
echo billCount(300)."<br>";

//********************************** */

function vote($age){

if($age < 18){
    echo "is not eligible to vote <br>";
}else{
    echo "is eligible to vote <br>";
}

}

vote(15);


$firstInteger = 10;

if($firstInteger == 0){
    echo "zero <br>";
}else if($firstInteger < 0){
    echo "Negative <br>";
}else {
    echo "Postive <br>";
}

function calc($first,$second,$oper){
switch ($oper) {
    case '+':
        $result = $first + $second;
        break;
    case '-':
        $result = $first - $second;
        break;
    case '*':
        $result = $first * $second;
        break;
    case '/':
        $result = $first / $second;
        break;
    
    default:
        # code...
        break;
}
return $result;
}

echo calc(10,20,'*')."<br>";


$numbers = array(60,86,95,63,55,74,79,62,50);
$sum = 0;
for($i = 0; $i < count($numbers); $i++)
    $sum += $numbers[$i];

$avg = $sum / count($numbers);

if($avg < 60){
    echo "F <br>";
}else if($avg>60 && $avg <= 70){
    echo "D <br>";
}else if($avg > 70 && $avg <= 80){
    echo "C <br>";
}else if($avg > 80 && $avg <= 90){
    echo "B";
}else if($avg > 90 && $avg <= 100){
    echo "A <br>";
}
//************************************ */


