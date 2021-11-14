<?php
class User{
    function __construct(){
        print "<br>UserClass : Constructing " .get_class($this) ;
    }
    public function __destruct(){
        echo '<br> UserClass : Destructing ' . get_class($this);
    }
}
class Employee extends User{

    public function __construct(){
        parent::__construct();
        print "<br>EmployeeClass : constructing itself";
    }
    public function __destruct(){
        echo 'EmployeeClass L destructing itself ' ;
        parent ::__destruct();
    }
}
class Manager extends Employee{
    public function __construct(){
        parent ::__construct();
        print "<br> ManagerClass : constructing itself ";
    }
    function __destruct(){
        echo 'ManagerClass : destructing itself';
    }
}
class Engineer extends Employee{

}

echo '[Constructing] ';
echo '<br> user object ' ;
$user = new User() ;

echo '<br><br>employee object ' ;
$employee = new Employee() ;

echo '<br><br>Manager object';
$manager = new Manager() ;

echo '<br><br>Engineer object';
$engineer = new Engineer() ;

echo '<br><br>[Destructing]' ;

echo '<br>-----user object ';
unset($user);

echo '<br><br>----employee object <br>' ;
unset($employee) ;

echo '<br><br>Manager object <br>' ;
unset($manager) ;

echo '<br><br>---Engineer object<br>' ;
unset($engineer);

/*
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
*/
?>