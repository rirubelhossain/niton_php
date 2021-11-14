<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>
</head>
<body>
    
<?php

    echo 'Title : ' . $book->getTitle() . '<br>' ;
    echo 'Author : ' . $book->getAuthor() . '<br>' ;
    echo 'Description : ' . $book->getDescription() . '<br>' ;
    echo 'Price : ' . $book->getPrice() . '<br>' ;

?>
</body>
</html>