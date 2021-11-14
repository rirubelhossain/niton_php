<?php
include_once ("model/Book.php");
class Model{
    public function getBookList(){
        // here we use sample array to hold the data
        // in real application data will come from
        // data repository (from db , file , etc)
        return array(
                "PHP Bsic" => new Book(1 , "PHP Basic", 650.00, "Niton","To learn PHP language"),
                "Gulliver's Travels" => new Book(2,"Gulliver's Travels",900.00,"Jonathon Swift","Children's Story Book"),
                "The Hobbit" => new Book(3, "The Hobbit", 750.00, "J. R. R. Tolkien", "Children's story Book")
        );
    }
    public function getBook($title){
        // first get booklist array from previous function
        // then get the book by it's title key
        // in a real application this will be done through a db
        // select command
        $book_list = $this->getBookList();
        return $book_list[$title] ;
    }
}


?>