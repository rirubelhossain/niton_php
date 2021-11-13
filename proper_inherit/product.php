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
?>