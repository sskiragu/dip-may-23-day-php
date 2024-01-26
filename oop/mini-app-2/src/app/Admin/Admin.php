<?php

namespace App\Admin;

use App\User\User;

class Admin extends User{

    public function __construct($id, $username, $email, $password)
    {
        parent::__construct($id, $username, $email, $password);
    }

    public function upload_product(){
        echo "Product uploaded";
    }
}