<?php

class Account3{

    private $account_no;
    private $account_name;
    
    public function __construct($account_no, $account_name)
    {
        $this->account_no = $account_no;
        $this->account_name = $account_name;
    }

    public function set_account_no($ac){
        echo $this->account_no = $ac;
    }
    public function get_account_no(){
        echo $this->account_no;
    }
    
}

$account3 = new Account3(34567890, "John Doe");
// $account3->set_account_no(00000000);
$account3->account_no = 000000;
$account3->get_account_no();