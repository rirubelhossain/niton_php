<?php



$a = 10 ;
$b = 20 ;
echo "<br>";
/// This is call by value function
function a_() :int{
    return (100);
}
echo "The value of the value = " . add($a , a_()) . "<br>"; // this is call by value 
function add($a , $b ) :int{
    return ($a + $b );
}

/// call by reference 

$number_1= 20 ;
$number_2 = 10 ;

echo $number_1 . "<br>" ;
echo $number_2 . "<br>";

echo "<br>";
echo "Print the Reference value of this function = " . radd($number_1 , $number_2) ."<br>";

echo $number_1 . "<br>" ;
echo $number_2 . "<br>";

function radd(&$number_1 , &$number_2) : int{
    $number_1 = 100 ;
    $number_2 = 200 ;

    return($number_1 + $number_2 );

}


echo "how to divied to number " ."<br>";
var_dump( round(22 / 7 )) ;
var_dump( (int)floor(22 / 7 )) ;
var_dump(sqrt(-1.2)) ;

echo "<br>";

test();
echo "Outside the function = " . $xx ."<br>";

function test(){
    global $xx ;
    $xx = 10 ;
    echo "Inside the function = " . $xx ."<br>";
}
echo "<br>";
st_test();
st_test();
st_test();

function st_test()
{
    static $count = 0 ;
    ++$count ;
    echo "Value of the counter = " .$count ."<br>";
}

/// isset() /// this is boolean function variable e data sert kora hoise ki na jana jabe

$set  ;


if(isset($set))
{
    echo "True" ."<br>";
}else{
    echo "False" ."<br>" ;
}

define("PI" , 3.1416 );
echo PI ;





?>