<?php

namespace App ;
class Bank{
    public function __construct(){
        echo "Hello i am from bank file!";
    }
}
 
class Add{
    private $a , $b ;
    public function __construct($a , $b){
        $this->a = $a;
        $this->b = $b;
    }
    public function summation() : int{
        echo "This result from bank function = ";
        return($this->a + $this->b) ;
    }
}
?>