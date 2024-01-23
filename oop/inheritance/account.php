<?php

class Account{

    // properties
    public $account_no;
    public $account_name;

    public function __construct($account_no, $account_name)
    {
        $this->account_no = $account_no;
        $this->account_name = $account_name;
    }

    public function print_account_info(){
        echo "{$this->account_no} {$this->account_name}";
    }
}

class SavingAccount extends Account{

}

class FixedAccount extends Account{
    public $interest = '1.5';
}

$fixed_account = new FixedAccount(23456789098765, "John Doe");
$fixed_account->print_account_info();