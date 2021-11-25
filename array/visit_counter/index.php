<?php
//start session
session_start() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit History</title>
</head>
<body>
    
    <h2>Your visit history</h2>
    <?php
    if(!isset($_SESSION['visits'])){
        echo "This is your first visit . ";
    }else{
        echo "You previously visited this page on: " , "<br>";
        foreach($_SESSION['visits'] as $v){
            echo date('d M y h:i:s', $v) . "<br>" ;
        }
    }
    
    ?>

</body>
</html>
<?php
//add current date/time stamp to session array
$_SESSION['visits'][] = time() ;
?>