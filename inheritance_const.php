<?php
class User{
    function __construct(){
        print "In User Constructor<br>";
    }
}
class Employee extends User{

    public function __construct(){
        parent::__construct();
        print "In Employee constructor<br>";
    }
}
class Manager extends Employee{
    public function __construct(){
        parent ::__construct();
        print "In Manager constructor <br>";
    }
}
$user = new User(); /// create user type object here 
$employee = new Employee() ;
$manager = new Manager();

print "<br><br>";

///family inheritance
class shukur_bhuiyan{
    public function __construct(){
        print "This is shukur bhuiyan!!<br>";
    }
}
class Jafor_bhuiyan extends shukur_bhuiyan{
    public function __construct(){
        print "This is Jafor Bhuiyan<br>";
    }
}

class Rubel extends Jafor_bhuiyan{
    
}

class Rasel extends Jafor_bhuiyan{
    
}

$shukur = new shukur_bhuiyan();
$jafor = new Jafor_bhuiyan();
$rubel = new Rubel();
$rasel = new Rasel();

?>