<?php

require_once('cd.php');// this function copy from main cd.php
require_once('book.php');// this function copy information from book.php


$product = new Product(0 , "Product", 100.00);
$product->showInfo();

$book = new Book(1, "OOP PHP", 750.0);
$book->showInfo() ;

$cd = new CD(2 , "Enigma MCMXC", 1000);
$cd->showInfo();




//var_dump($product);
?>
