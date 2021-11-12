<?php

 

?>


<?php
/*
class Account{
    protected $account_number ;
    protected $account_type ;
    protected $accoutn_rate ;

    public function __construct($number , $type , $rate){
        $this->account_number = $number;
        $this->account_type = $type;
        $this->account_rate = $rate;
    }
}
class AccountHolder extends Account{
    private $holder_name ;
    private $holder_dob ;
    private $holder_nid ;
    private $holder_gender ;
    private $holder_balance ;

    public function __construct($name , $dob ,$nid , $gender,$balance)
    {
        $this->holder_name = $name;
        $this->holder_dob = $dob;
        $this->holder_nid = $nid;
        $this->holder_gender = $gender;
        $this->holder_balance = $balance;
    }
    public function __destruct()
    {

    }
    public function showHolder()
    {
        echo "-----Account Holder Information --------<br>";
        echo "Name: {$this->holder_name} <br>" ;
        echo "DoB: {$this->holder_dob} <br>" ;
        echo "NID :{$this->holder_nid} <br>";
        echo "Gender :{$this->holder_gender} <br>";
        echo "Current Balance: {$this->holder_balance} <br>";
    }
}
$rubel = new AccountHolder("Rubel Hossain ", "02-02-1994", "1861056853", "Male" , "BDT 20000");//here is the rubel is a object
$shuvo = new AccountHolder("shuvo ", "02-02-1994", "1861056853", "Male" , "BDT 20000");//here is the rubel is a object
$rubel->showHolder();/// object call member function
$shuvo->showHolder() ;


$update = new Account()
*/
?>
<?php
class Currency{
    const BDT_USD = 82.95 ;
    const BDT_JPY = 0.78251 ;
    const BDT_GBP = 115.76 ;
    const BDT_EUR = 102.5324 ;

    public function converterBDT_to_GBP($value){
        if( $value > 0 ){
            return ($value / self::BDT_GBP);
        }else{
            return 0 ;
        }
    }
    public function converterBDT_to_EUR($value){
        if( $value > 0 ){
            return ($value / self :: BDT_EUR);
        }else{
            return 0 ;
        }
    }
    public function converterBDT_to_USD($value)
    {
        if( $value > 0 )
            return $value / self::BDT_USD ;
        else
            return 0 ;
    }
    public function converter_to_BDT_JPY($value)
    {
        if($value > 0)
        {
            return ($value / self::BDT_JPY) ;
        }
        else
            return 0 ;
    }
}
$cur = new Currency() ;
echo "The BDT 8000 = USD ".$cur->converterBDT_to_USD(8000)."<br>";
echo "The BDT 8000 = jpy ".$cur->converter_to_BDT_JPY(8000)."<br>"; 
echo "The BDT 8000 = GBP ".$cur->converterBDT_to_GBP(8000)."<br>"; 
echo "The BDT 8000 = EUR ".$cur->converterBDT_to_EUR(8000)."<br>"; 

class Employee{
    public $employee_name ;
    public $employee_age ;
    public $employee_salary ;

    public function showProperties(){
        var_dump($this);
    }
}
$emp = new Employee() ;
echo $emp->showProperties();




?>