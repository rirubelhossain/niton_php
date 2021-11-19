<?php

include('bank.php');
include('account.php');
include ('user_class.php');


new namespace\App\Bank();
echo "<br>";
new namespace\App\Example\Bank();

echo "<br>";

$a = new namespace\App\Add(1,4);
echo $a->summation();
echo "<br>";
$a = new namespace\App\Example\Add(1,2,1);
echo $a->summation();

echo "<br>";

new namespace\j\Add();

?>