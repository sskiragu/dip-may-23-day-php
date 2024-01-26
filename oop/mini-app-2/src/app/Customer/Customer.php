<?php
namespace App\Customer;

use App\User\User;

class Customer extends User{

    public function __construct($id, $username, $email, $password)
    {
        parent::__construct($id, $username, $email, $password);
    }

    public function view_product(){
        echo "All products goes here";
    }

}