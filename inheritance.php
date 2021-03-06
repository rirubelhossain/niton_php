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
echo "<br>";
/// how to use $this operator in the scope 
/// $this operator basically used inside the class and it's used from another method 
/// prime number generation
class PrimeNumbers{
    private $start = 0 ;
    private $end = 0 ;
    private $last_is_prime = 3 ;
    private $primes_checker = array() ;
    public $count = 1 ;
    public function setRange($start , $end){
        $this->start = $start;
        $this->end = $end;
    }
    public function showPrimes(){
        
        $start_loop = ($this->start % 2 == 0) ?$this->start + 1 : $this->start;
        if( $this->start <= 2){
            echo "2\n";
        }
        for($i = $start_loop ; $i <= $this->end && ! isset($this->not_primes[$i]); $i +=2){
            if($this->check_prime($i)){
                echo $i. "\n" ;
                 ++$this->count;
            }
        }
    }
    function check_prime($number){
        if($number < 2 )return(false);
        foreach($this->primes_checker as $k => $c){
            if( $number % $k == 0)
            return false ;
        }
        $half_number = $number / 2 ;
        for($i = $this->last_is_prime ; ($i <= $half_number) &&(!isset($this->not_primes[$i])); $i +=2){
            $this->last_is_prime += 1 ;
            if($this->modding($number, $i ) == 0 ){
                return false ;
            }else{
                if( !isset($this->primes_checker[$i])){
                    $this->primes_checker[$i] = true ;
                }
            }
        }
        $this->primes_checker[$number] = true ;
        return true ;
    }
    function modding($number , $divider){
        $first = true ;
        for($i = $divider; $i <= $number; $i += $divider){
            ($first) ? $first = false : $this->not_primes[$i] = true ;
            if( $number - $i < $divider){
                return $number - $i ;
            }
        }
    }
}
$pn = new PrimeNumbers();
$pn ->setRange(1,1000);
$pn ->showPrimes() ;
echo"<br><br>";
echo "total number of prime is = " .$pn->count;

class Product {
    protected $name = "Product Name";
    protected $size = "Product Size";
    protected $price = 0.0;

    //read method
    public function getName() : string{
        return $this->name;
    }
    public function getSize() : string{
        return $this->size;
    }
    public function getPrice() : float{
        return $this->price;    
    }
    //write methods
    public function setName($name){
        //validation for string and length
        //which conforms proper encapsulation
        if(is_string($name) && strlen($name) < 64){
            $this->name = (string)$name;
        }else{
            $this->name = substr((string)$name , 0 , 64);
        }
    }
    public function setSize($size){

    }
}
/// how to use construct in program
class Product_update{
    private $name = "" ;
    private $price = 0.0 ;

    function __construct(){
        print "\nProduct Constructor\n";
        print "------------------------\n";
    }
    function __destruct()/// destruct always used in stack which is print reverse order
    {
        print "<br> Destorying ". $this->name . "<br>";
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function showInfo(){
        print "Name: " . $this->name . "<br>";
        print "Price: " . $this->price . "<br>";
    }
}
print "<br>";
$hdd = new Product_update() ;
$hdd->setName('wd 2tb');
$hdd->setPrice(6500.00);

$hdd->showInfo();
echo "<br>";
class FileUtil{
    private $handle ;
    private $filename ;
    public function __construct($filename , $filemode){
        $this->filename = $filename;
        $this->handle = fopen($filename , $filemode);
    }
    public function __destruct(){
        if($this->handle){
            fclose($this->handle); /// realease memory
        }
    }
    public function display(){
        echo fread($this->handle , filesize($this->filename)) ;
    }
}
$file = new FileUtil('./sample.txt' , 'r') ;
$file->display() ;

class Addition{
    private $number_1 ;
    private $number_2 ;
    function __construct($number , $number1)
    {
        $this->addfunction($number , $number1);
    }
    function addfunction($number, $number1){
        $result = $number + $number1 ;
        echo "The result is = ".$result ;
    }
    function __destruct()
    {

    }
}
echo "<br>";
$aa = new Addition(12,12);


$data = 10  ;
echo "<br>";
var_dump($data);
echo "<br>";
$data1 = 10.23 ;
var_dump($data1) ;
$sting =  "Rubel Hossain" ;
echo "<br>";
var_dump($sting) ;
echo "<br>";

$data = array('Name'=>'rubel');
var_dump($data);
echo "<br>";
class BlogPost{
    private $author = "Niton";
    private $post = "this is not serious matter";
}
$data = new BlogPost() ;
var_dump($data) ;
echo "<br>";
class User{
    private $name = "" ;
    public function __construct($name){
        $this->name = $name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function showName(){
        echo "Name is = :" .$this->name."<br>";
    }
}

$u1 = new User("Rustom") ;
$u2 = $u1 ;
$u1->setName('Rubel');
$u1 = NULL ;
$u2 ->showName() ;
echo "<br>";
$u3 = new User("Rasel");
$u4 = &$u3 ;
$u4->showName();
$u3->setName("Shuvo");
$u3 = NULL ;
//$u4 ->showName() ;
/// how use array on class

class Consultant{
    private $name = "";
    private $role = "";
    public function __construct($name , $role){
        $this->name= $name;
        $this->role= $role;
    }
    public function showRoles()
    {
        echo "Name: ".$this->name ."<br>" ;
        echo "Roles: ".$this->role ."<br>" ;
    }
}
echo "<br>";
$data_r = [] ;/// this is an array 

$r1 = new Consultant("Rubel","Software Developer");
$data_r[] = $r1 ;
$r2 = new Consultant("Rasel", "Cricketer");
$data_r[] = $r2 ;

$r3 = new Consultant("Amin", "Engineer");
$data_r[] = $r3 ;


$i = 1 ;
foreach($data_r as $key)
{
    echo "<br> Role # ".$i .": <br>";
    $key->showRoles();
    ++$i ;
}

class Students{
    private $name = "";
    private $dept = "";
    public function __construct($name , $dept){
        $this->name = $name;
        $this->dept = $dept;
    }
    public function showInfo_(){
        echo "Name: ". $this->name ."<br>";
        echo "Name of the department : ". $this->dept."<br>";
    }
}
echo "<br>";
// Create an arry 
$data_student = [] ;
$s1 = new Students("Rubel", "Computer Science and Engineering");
$data_student[] = $s1 ;
$s2 = new Students("Amin","Computer Science and Engineering");
$data_student[] = $s2 ;
$s3 = new Students("shuvo", "HSC_science");
$data_student[] = $s3 ;

$s4 = new Students("Rasel", "Environmental Science") ;
$data_student[]  = $s4 ;

$j= 1 ;
foreach($data_student  as $key)
{
    echo "<br>Student # ". $j. ":<br>";
    $key->showInfo_();
    ++$j ;
}
echo "<br>";
/// how to read data form database like 
class Userr{
    private $id = "";
    private $username = "" ;
    private $active = "";

    public function __construct($id , $username , $active){
        $this->id = $id;
        $this->username = $username;
        $this->active = $active;
    }
    public function showUserinfo(){
        echo "ID : " . $this->id . "<br>";
        echo "UserName : " . $this->username . "<br>";
        echo "Active Status : " . $this->active."<br>";
    }
}
    /// Read table data and create object array
    function readUserFromDatabase(&$users){
        $table_data = [['1','Rubel.hossain@gmail.com','1'],
                       ['2', "Rasel.hossain@gmail.com",'1'],
                       ['3', 'Amin Mahamud@gmail.com', '1']];
        //Create user object and populate users array
        foreach($table_data as $key){
            $id = $key[0] ;
            $username= $key[1];
            $active = $key[2];
            $users = new Userr($id, $username,$active);
        }
    }
    /// Create Empty array
    $users = [] ;
    /// Pass arry as referance
    readUserFromDatabase($users);
    $k = 1 ;
    foreach($users as $u )
    {
        echo "<br>User # " . $k . ": <br>";
        $u->showUserinfo() ;
        ++$k ;
    }
?>
<?php
    
?>