<?php


class Human{
    protected $genders= array("Male", "Female");
    protected function gender($x){
        if($x == "male"){
            echo "This customer is Male";
        }
        else{
          echo "This customer is Female";

        }
    }

}





class Customer extends Human{
    private $name;

    public function setName($n){
        $this->name = $n;
    }

    public function getName(){
        return $this->name;
    }

    public function getGender(){
        $this->gender("Female");
    }

}
$obj1 = new Customer();

$obj1->setName("Lujain");

echo $obj1->getName();

$obj1->getGender();























































































