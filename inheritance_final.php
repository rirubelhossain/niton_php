<?php

class Product{/// parent class or base class 
    private $id ;
    private $title ;
    private $price ;

    public function __construct($id , $title , $price){
        //echo "<br> -----Prodcut Constructor-------<br>";
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }
    public function setProduct($id , $title , $price){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }
    public function showInfo()
    {
        echo "<br>......Product Info......<br>" ;
        echo "Title : {$this->title} <br>";
        echo "Price : {$this->price} <br>";
    }
}

class Book extends Product{/// derived class or child class

}
class CD extends Product{/// derived class or child class

}

$product = new Product(1 , "OOP PHP", 150.50);// created object type variable 
$product->showInfo() ;// this function call for print showinfo function on the program

//$product = new Product() ;
$product->setProduct(2, "Enigma MCMXC", 900.00);
$product->showInfo();

$book = new Book(3, "I hate java first", 1005.0);
$book->showInfo();

$cd = new CD(4, "hate first", 4555.00);
$cd ->setProduct(4, "hate first", 4555.00);
$cd ->showInfo() ;
/// Another exmple for inheritance 

class Publication{//base class or parent class
    protected $date ;
    protected $total_price;
    protected $copyright ;
}
class Book_1 extends Publication{ /// derived class or child class
    protected $isbn ;
    protected $author ;
    protected $price ;
}
class Magazine extends Publication{ /// derived class or child class 
    protected $edition ;
    protected $editor ;
    protected $price ;
}
/// Create all object type variable here 
$publication = new Publication() ;
$book_1 = new Book_1() ;
$magazine = new Magazine() ;

var_dump($publication);
var_dump($book_1);
var_dump($magazine);



?>