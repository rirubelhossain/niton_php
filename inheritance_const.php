<?php
class User{
    function __construct(){
        print "In User Constructor<br>";
    }
}
class Employee extends User{

    public function __construct(){
        print "In Employee constructor<br>";
    }
}
class Manager extends Employee{

}
$user = new User(); /// create user type object here 
$employee = new Employee() ;
$manager = new Manager();



?>