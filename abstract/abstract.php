<?php

abstract class shape{ /// Here is the shape is the parent class in this program
    protected static $id ;// this variable is static so it will be increase value 
    public function __construct(){// this is constructor of this program
        self::$id++ ;
    }
    abstract function getArea() ;/// not implement here it should implement different place
}

class Squre extends shape{/// this is child class or derived class 
    private $edge ;
    public function __construct($edge){
        parent::__construct() ; /// In this statement return parent class value that means we can use parent class properties in child class
        $this->edge = $edge;
    }
    public function getArea(){/// abstract method is define here 
        $area = $this->edge * $this->edge;// here is the simple multiplication
        echo "The area of the squre " . self::$id . ": " . $area ."<br><br>";// just print 
    }
}

/// create the object type of the class
$squre = new Squre(10); /// object create here
$squre->getArea();/// In this function show the result of this function

$squre = new Squre(4); // second object created here 
$squre->getArea() ;/// how the output of this function and calculate the result 
?>