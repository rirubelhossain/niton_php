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
//var_dump($topics_list);
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
/// how to use clouser function 
echo "<br><br>";
$counter = 100 ;
// change the counter here 
$clouser = function () use (&$counter){
     $counter++ ;
};

/// call the anonymous functions
$clouser() ;
$clouser() ;
$clouser() ;

echo "the result will be " , $counter. "<br>" ;

/// how to use recursive function in program


$sum_range = recursive_sum(100) ;

echo "The output will be = ", $sum_range ;


function recursive_sum($value ):int{
    static $h = 0 ;
    if( $value == 1){
        return(1);
    }else{
        $h =  ($value + recursive_sum($value-1));
        //echo $h . "<br>";
    }
    return $h ;
}

/// PHP string manipulation in program

echo "<br>";
$age = 10 ;
echo 'The value of $age'  , "<br>"; /// All variables are will be string in this line !!

echo "The value of $age", "<br>" ; /// All variables are will be printed in the line !!

$age = 20 ;
$name = "Rubel Hossain";
$str = "Hi my name is {$name} and my age is {$age}"."<br>";

echo $str . "<br>";

function summation(){
    return(10 * 10 );
}

echo "Hi my name is {$name} and my age is {$age} and some calculation is {summation()}";
echo "<br>";

echo date_default_timezone_get() , "<br>";
//echo date_sunrise(), "<br>";


echo decbin(15) , "<br>";
echo decoct(15), "<br>";
echo dechex(15), "<br>";

///exption handeling 
echo "<br>";
function mod($number1 , $number2){
    if( $number2 <= 0){
        return "This case division is not possible ";
    }else{
        return($number1 % $number2);
    }
    
}
echo "<br>";
echo "the result is ", mod(10, 0), "<br>";

/// how to use try and catch block in program

echo "<br>";
echo "<br>";
echo "<br>";
try{
    echo "Result: ", (7 % 3);
}catch(Throwable $e ){
    echo "Error: ", $e->getMessage() ;
    echo "<br> Code: ", $e->getCode();
    echo "<br> Line: ", $e->getLine();
    echo "<br> File: ", $e->getFile();
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

try{
    $nll = (70 / 0 );
    echo "The result is = ", $nll . "<br>";
}catch(t $e){
    echo "<br> Line : ", $e->getLine(), "<br>";
    echo "<br> Line : ", $e->getMessage(), "<br>";
    echo "this part represent by catch part in the program";
}


echo "<h2>In this line are executed after try block executed </h2>";
/*
if( 40 % 0 ){
    echo "this is not valid", "<br>";
}else{
    echo "this case are not executed";
}
*/

echo "Again this line should be execute or not let's see what happed in line ", "<br>";
echo "so twice ta eikhane bondhu seita hosse normally akhn aar any line execute hbe na cause this is an uncaught error so php engine are not continue run this statement so it's very interesting to learing";
echo "That's why try and catch block are the most important to use amr bhai vlo lagse ";



echo "ok<br><br>";



?>