

<!-- php class and object -->


<?php 


// ATM user defined class
class ATM{

    // gloabl variable array 
    // example array(1,2,34,57,5,4) single 
    // array(1,2,3,4,array(1,2,4,6,6)) multi
    // associative array key = value;
    protected $result_arr = array();
    // if object creation time the function is automatically call
    function __construct($location_name,$bankarr,$withdraw_macine,$deposite_machine){
        // this current instance
        $result_arr1['location_name'] = $location_name;
        $result_arr1['bank_names'] = $bankarr;
        $result_arr1['withdraw_machine'] = $withdraw_macine;
        $result_arr1['deposite_machine'] = $deposite_machine;
        array_push($this->result_arr,$result_arr1);
    }

    // if the php script end time the function is automatically called
    // function __destruct(){
    //     echo "the php script ending";
    // }


    // set details functions
    function set_details($detail_arr){
        // $this->result_arr['location_name'] = $detail_arr['location_name'];
        // $this->result_arr['bank_names'] = $detail_arr['bank_names'];
        // $this->result_arr['withdraw_machine'] = $detail_arr['withdraw_machine'];
        // $this->result_arr['deposite_machine'] = $detail_arr['deposite_machine'];
        array_push($this->result_arr,$detail_arr);
    }



    // get details functions
    function get_details(){
        return $this->result_arr;
    }
  

}






// object creation  objname = new constructorname()
$obj = new ATM("Madurai",["Canara Bank","HDFC","Bob","KVB","SBI","CBI","iob"],3,4);

$demo_arr['location_name'] = "Melappalayam";
$demo_arr['bank_names'] = ["HDFC","BOB","IOB","KOB","KNB"];
$demo_arr['withdraw_machine'] = 5;
$demo_arr['deposite_machine'] = 7;

$obj->set_details($demo_arr);

echo "<pre>";
print_r($obj->get_details());


echo "<br>";
var_dump($obj instanceof ATM);




// access modifiers
// 1. public
// 2.protected
// 3.private

// bank class
class Bank{
    public $account_holder_name;
    public $ifsc_code;
    public $account_number;

    public function set_name($name){
        $this->account_holder_name = $name;
    }

    protected function set_account_number($ac){
        $this->account_number = $ac;
    }


}

class child extends Bank{
    public function msg($ac){
        return $this->set_account_number($ac);
    }
}


$p = new Bank();
$p->set_name("Account Holder Name");
// $p->set_account_number("CNRB0001346");
// $P->account_number = "0977876r27364324";


echo $p->account_holder_name;


$obj2 = new child();
$obj2->msg("289789534y58934hfeioferifjofjerif");
echo "<br>";
echo $obj2->account_number;

// echo "<br>";
// echo $p->account_number;









?>