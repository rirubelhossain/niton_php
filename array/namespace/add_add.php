<?php
include('add.php');
include('add1.php'); 

$first_add = new namespace\A\Add(1,2,3);
echo "The result is = ", $first_add->ad(), "<br>" ;
$first_add->test()  ;

echo "Another namespace used here<br>";
echo "<br><br>";


$first_add = new namespace\A\B\Add(1,2,3);
echo "The result is = ", $first_add->ad(), "<br>" ;
$first_add->test()  ;



?>