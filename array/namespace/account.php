<?php
namespace App\Example ;
class Bank{

    public function __construct(){
        
        echo "Hello i am form account file!!";
    }

}
 
class Add{
    private $a , $b , $c ;
    public function __construct($a , $b , $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function summation() : int{
        echo "This result from account function = ";
        return($this->a + $this->b + $this->c) ;
    }
}

?>