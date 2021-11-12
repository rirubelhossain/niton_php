<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP basic</title>
</head>
<body>
    
    <?php
    //echo "Hello world";
    ?>

    
</body>
</html>


<?php
    class Product{
        /// this is all about properties or attributes
        private $name ;
        private $category ;
        private $price ;
        public static $stockQuantity ;
        /// this is all about method area 

        function __construct($name = "" , 
        $category = "" ,
    //    $price = 0.001 ;
        $stockQuantity = 0 
        ){

        }
        function getName($name){

        }
        function specialPrice($percenAmount){

        }
        function setPrice($amout){

        }
        function updateStockQuantity($qty = 1){

        }
    }
    class Friute{
        private $name ;
        private $color ;
        private $smle ;

        function __construct($name , $color , $smle){
            $this->name = $name ;
            $this->color = $color ;
            $this->smle = $smle ;
        }
        function print()
        {
            echo "Name of the Banana " .$this->name ."<br>";
            echo "Name of the color ".$this->color ."<br>" ;
            echo "smell of the banana ".$this->smle ."<br>";
        }
    }
    $banana = new Friute("chompa" , "yello" , "switeness");// here is the $banana is the name of object and 
    $banana->print();

    $apple = new Friute("Love","Red" , "nice");
    echo "<br>";
    $apple->print();

    echo "<br>";

    $mango = new Friute ("Katimon", "Yello" , "swite") ;
    $mango->print() ;


    echo "<br>";
    class Car{
        private $name ;
        private $car_color ;

        public function __construct($name , $car_color){
            $this->name = $name;
            $this->car_color = $car_color ;
        }
        public function show(){
            echo "The car name is = ".$this->name ."<br>";
            echo "The car color is = ".$this->car_color."<br>" ;
        }
    }

    $toyta = new Car("Toyta X 100", "red");
    $toyta->show();/// see the output of the program
    //echo $toyta.name ;

?>