<?php

/**

1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

Expected Output:  total as a number */
echo "**************Q1********************* <br>";
echo "<br>";
    $sum = 0;
    for($i = 0; $i<=30; $i++){
        $sum +=$i;
    }
    echo $sum."<br>";





/*

2.	Create a script to generate the following pattern, using the nested for loop. **  Optional **


Expected Output:

A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
*/
echo "**************Q2********************* <br>";

function alph($num){
    $letter = 65;
$count=0;
for($i= 0; $i<$num; $i++){
    $count=0;
    for($j = $num-2;$j>=$i;$j--){
        
        echo 'A ';
        
    }
   
    while($count <=$i){
    echo chr($letter)." ";
        $count++;
}
$letter++;
    echo '<br>';
    

}
}
alph(5);

/*

3.	Create a script to generate the following pattern, using the nested for loop. . **  Optional **

Expected Output:

1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5




*/
echo "**************Q2********************* <br>";

function numbers($num){
    $numb = 1;
$count=0;
for($i= 0; $i<$num; $i++){
    $count=0;
    for($j = $num-2;$j>=$i;$j--){
        
        echo 1;
        
    }
   
    while($count <=$i){
    echo $numb." ";
        $count++;
}
$numb++;
    echo '<br>';
    

}
}
numbers(5);

/*


4.	Create a script to generate the following pattern, using the nested for loop. **  Required **

Expected Output:

1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
*/
echo "<br>";echo "<br>";
echo "************************Q4********************<br>";
function pat($num){
 for($i = 1;$i<=$num; $i++){
     for($j=1;$j<=$num; $j++){
         if($i==$j){
             echo $i;
         }
         else echo 0;
     }
     echo "<br>";
 }
}
pat(8);



/*
5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. **  Required **

Sample Input: 5
Expected Output: 120
*/
echo "******************Q5.************************";
function factorial($num){
    $fac =1;
    for($i =2; $i<=$num; $i++){
        $fac = $fac * $i;
    }
    return $fac;
}
echo "<br>";
echo "<br>";
echo factorial(5);
echo "<br>";
echo "<br>";

/*

6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **
*/
echo "********************Q6.**********************";
echo "<br>";
echo "<br>";
function fibonacci($num)
{
    $x = 0;    
$y = 1; 

for($i=0;$i<=$num;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
}
}
echo "<pre>";
print_r(fibonacci(6));
echo "<br>";
echo "<br>";
/*
 
7.	Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. . **  Optional **
1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30
 */
echo "********************Q6.**********************";
echo "<br>";
echo "<br>";
echo "<table>";
 for($i=1; $i<7; $i++){
     echo "<tr>";
     for($j=1; $j<7; $j++)
     {
         echo "<td>";
         echo "$i * $j = " . $i*$j;
echo "<td/>";
     }
     echo "<tr/>";
 }
echo "<br>";
echo "<br>";
 /*

 
8.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".. **  Optional **

Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….

 
9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **


Sample output:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
*/
echo "<br>";
echo "******************Q9.***************";

echo "<br>";
function Floyd($num){
$count = 1;
for($i = 1; $i < $num ; $i++ ){
    for($j=1; $j<$i; $j++){
        echo $count." ";
       $count++;
                 
        
    }
    echo "<br>";
}
}
Floyd(7);
echo "<br>";
echo "<br>";


/*


10.	Write a PHP program to print the following pattern. . **  Optional **
   
Expected Output:

     A 
    A B 
   A B C 
  A B C D 
 A B C D E 
  A B C D 
   A B C 
    A B 
     A
 

*/
