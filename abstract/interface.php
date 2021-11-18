<?php

interface MathaInterface{
    const msg = "Math Interface";
    const PI = 3.141516 ;
    public function calculate() ; /// method must be public 
}

echo "The value of the MSG = ".MathaInterface::msg."<br>" ;
echo "The value of the PI = ". MathaInterface::PI ."<br>" ;

interface LoggerInterface{
    public function log($message) ;
}
class FileLogger implements LoggerInterface{
    public function log($message){
        echo "FileLogger :: " .$message ;
    }
}
class DatabaseLogger implements LoggerInterface{
    public function log($message){
        echo "DatabaseLogger :: ". $message;
    }
}

$logger = new FileLogger() ;
$logger->log("Object Created.......<br>") ;


$logger = new DatabaseLogger();
$logger->log("object created----<br>");



?>