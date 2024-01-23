<?php

class Account2{

    private $account_no = 2345678;

}

class FixedAccount2 extends Account2{
    public function print_account_info(){
        echo $this->account_no;
    }
}

$fixed_account2 = new FixedAccount2();
$fixed_account2->print_account_info();