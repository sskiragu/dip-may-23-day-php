<?php

class Account{

    // properties
    public $account_no = 123456789098;
    public $account_name = "John Doe";
}

class SavingAccount extends Account{

}

$saving_account = new SavingAccount();
var_dump($saving_account);