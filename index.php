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
    class Friute{// this is member variable 
        private $name ;
        private $color ;
        private $smle ;

        function __construct($name , $color , $smle){/// this is constructor who can call by default when create an object of the program
            $this->name = $name ;
            $this->color = $color ;
            $this->smle = $smle ;
        }
        function print() /// member method who can access member variable of this class
        {
            echo "Name of the Banana " .$this->name ."<br>";
            echo "Name of the color ".$this->color ."<br>" ;
            echo "smell of the banana ".$this->smle ."<br>";
        }
    }
    $banana = new Friute("chompa" , "yello" , "switeness");// here is the $banana is the name of object and 
    $banana->print();

    $apple = new Friute("Love","Red" , "nice");// this is apple object 
    echo "<br>";
    $apple->print();

    echo "<br>";

    $mango = new Friute ("Katimon", "Yello" , "swite") ; // this is mango object 
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
    class Student{
        private $st_name ;
        private $st_id ;
        private $st_department ;
        private $st_session ;
        private $st_cgpa ;

        public function __construct($st_name , $st_id , $st_department,$st_session,$st_cgpa)
        {
            $this->st_name = $st_name ;
            $this->st_id = $st_id ;
            $this->st_department = $st_department ;
            $this->st_session = $st_session ;
            $this->st_cgpa = $st_cgpa ;
        }
    public function show_data()
        {
            echo $this->st_name;
            echo $this->st_id;
            echo $this->st_department;
            echo $this->st_session;
            echo $this->st_cgpa;
        }
    }
    $rubel = new Student("Rubel " , "15163103026 ", "CSE " ,"16-17 ","3.55 ");//Rubel is a student object
    $Rasel = new Student("Rasel " , "15163103026 ", "CSE " ,"16-17 ","3.55 ");//Rubel is a student object
    $amin = new Student("Amin " , "15163103026 ", "CSE " ,"16-17 ","3.55 ");//Rubel is a student object
    $shuvo = new Student("shuvo " , "15163103026 ", "CSE " ,"16-17 ","3.55 ");//Rubel is a student object
    $rubel->show_data() ;
    echo "<br>";
    $Rasel->show_data() ;
    echo "<br>";
    $amin->show_data() ;
    echo "<br>";
    $shuvo->show_data() ;
    echo "<br>";
    
?>