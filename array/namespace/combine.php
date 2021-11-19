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

/// Super global variable in php
echo "<br>";
print_r($_ENV);
echo "<br>";
print_r($_COOKIE);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_GET);
echo "<br>";
var_dump($_GET);
echo "<br>";
print_r($_REQUEST);
echo "<br>";

echo "<br>";
//print_r($_SESSION);
echo "<br>";
/// How to use unset() in program

$topics_list = ["Fruits" , "Animal", "Fish", "Birds"] ;
print_r($topics_list);
echo "<br>";
unset($topics_list[2]);
echo "<br>";
print_r($topics_list);
echo "<br>";
unset($topics_list);
var_dump($topics_list);
echo "<br>";

$topics_list = ["Fruits" , "Animal" , "Firsh" , "Birds"];
print_r($topics_list);

$count = count($topics_list);
echo "<br>";
echo $count. "<br>" ;

for($i = 0 ; $i < $count ; $i++ ){
    unset($topics_list[$i]);
}
print_r($topics_list);
echo "<br>";
var_dump($topics_list);

$sum_ar = [1,2,3,4,5];
$count_s = count($sum_ar) ;
$sum = 0 ;
echo "<br>";
for($i = 0 ; $i < $count_s ; ++$i){
    $sum += $sum_ar[$i] ;
}
echo "The summation is = ". $sum ."<br>";

/// How to use foreach loop in array
$grades = ['CSE101' => 'A+',
            'ENG101' => 'B+' ,
            'MAT101'=> 'A+' ,
            'ENV101' => 'A+'
];

foreach($grades as $grades => $value){
    echo "$grades : $value ". "<br>" ;
}
/* 
sett(10);
function addd($a){
    return ($a * $a);
}
function sett(callable $addd){
    echo $addd ;
}
*/

echo "<br>";


$anonumas = function ($kk):int{
    return($kk * $kk) ;
};
echo "The result of the anonumus function = ", $anonumas(12,12);


?>