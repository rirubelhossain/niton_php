<?php

namespace A\B;
class Add{
    private $number1 ;
    private $number2 ;
    private $number3 ;

    public function __construct($a , $b , $c){
        $this->number1 = $a ;
        $this->number2 = $b ;
        $this->number3 = $c;
    }
    public function ad(){
        return($this->number1 + $this->number2 + $this->number3) ;
    }
    public function test(){
        $result = $this->number1 + $this->number2 + $this->number3;
        echo "In this function call from inside the function", "<br>";
        echo "The result will be = ", $result . "<br>";
    }
}


?>