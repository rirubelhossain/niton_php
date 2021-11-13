<?php

class User{
    private $login_id = "";
    private $active_status = "";

    public function __construct($login_id , $active_status)
    {
        $this->login_id = $login_id;
        $this->active_status = $active_status;
    }
    public function setLoginid($id){
        $this->login_id = $id;
    }
    public function setStatus($status){
        $this->active_status = $status;
    }
    public function getloginid()
    {
        return $this->login_id;
    }
    public function getActiveStatus(){
        return $this->active_status;
    }
    public function showUserInfo(){
        echo "Login ID :" . $this->login_id . "<br>";
        echo "Active Status : " . $this->active_status ."<br>";
    }
}
class Employee{
    private $user = NULL ;
    private $name = "";
    
    public function __construct($name ,User $user){
        $this->name = $name;
        $this->user = $user;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getUser(){
        return $this->user;
    }
    public function showEmployeeInfo(){
        echo "<br> Employee Name : " . $this->name . "<br>";
        echo "Login Status : <br>" ;
        $this->user->showUserInfo();
    }
}

$user = new User("Ruebl@gmail.com","1");
$e1 = new Employee("Niton" , $user) ;
$e2 = clone $e1 ;

$e2 ->setName('Rasel');
$e2 ->getUser()->setLoginid("Rasel@gmail.com");

$e1 ->showEmployeeInfo();
$e2 ->showEmployeeInfo();

?>