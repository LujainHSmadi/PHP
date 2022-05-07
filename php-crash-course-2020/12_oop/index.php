<?php
 
// What is class and instance
// Create Person class in Person.php
 class Person{
     public string $name;
     public string $surname;
     private int $age;
     public ?int $number;// accept null
     public static $counter=0;
     public function __construct($name, $surname,$age){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        self::$counter++;
     }
     public function setAge($age){
        $this->age = $age;
     }
     public function getAge(){
        echo $this->age;
     }
     public function getCounter(){
        return self::$counter;
     }
 }
// Create instance of Person
$person = new Person('Lujain','Smadi',28);

echo '<pre>';
var_dump($person);
echo '</pre>';

echo Person::$counter;
echo Person::getCounter();
// Using setter and getter