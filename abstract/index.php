<?php

/// how to use abstract class in program
abstract class shape{
    public static $id  ;
    public function __construct(){
        self::$id++ ;
    }
    abstract public function getArea() ; /// no body define here 
} 
class Circle extends shape{
    private $m_fRadious ;
    public function __construct($radius){
        parent :: __construct() ;
        $this->m_fRadious = $radius;
    }
    public function getArea(){ // body implement here 
        $area = M_PI * $this->m_fRadious  * $this->m_fRadious;
        echo "<br> Circle Area with ID " . self:: $id." : is " . $area . "<br><br>";
    }
}
class Rectange extends shape{
    private $m_fWidth ;
    private $m_fHeight ;
    public function __construct($width , $height){
        parent :: __construct();
        $this->m_fWidth = $width;
        $this->m_fHeight = $height;
    }
    public function getArea(){ /// body implement here 
        $area = $this->m_fWidth * $this->m_fHeight;
        echo "<br> Rectange Area with ID " . self::$id . " : is ".$area . "<br><br>";
    }
}

$circle = new Circle(25) ;
$circle->getArea() ;

$rect = new Rectange(10, 10) ;
$rect->getArea() ;

echo M_PI ;


?>