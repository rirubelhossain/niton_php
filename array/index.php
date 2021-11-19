<?php

$sample = array("Amin" , "Rasel" ,  "shuvo" , "Rubel", "Imran" , "Kabir" , );

asort($sample) ;// In this function use for sort this is actaully build in function


foreach( $sample as $key){
    echo $key . "<br>";
}

$next = [ 1, 2, 3 , 4 , 5 , 6];

echo "<br>";
foreach($next as $a){
    echo $a . "<br>" ;

}
echo "<br>";
var_dump(array("A","E","I","O","U"))."<br>";
var_dump(["a","e","i","o","u"]);

echo "<br>";

var_dump(array(
                "Niton",
                "142044",
                28,
                3.88,
                "cse" ,
                true ,
                1969
));
echo "<br>";

var_dump(array("Name" => "Rubel",
                "Dept" => "CSE" ,
                "id" => "15163103026" 
));

echo "<br>";

$list = ["Fruits","Animal" , "Fish" , "Birds"] ;
print_r($list);




?>