<?php

class Person{

    public $id;
    public $username;
    public $email;
    public $password;

    // constructor
    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // function to print the user details
    public function print_user_info(){
        echo "{$this->id} {$this->username} {$this->email} {$this->password}";
    }

}

$person = new Person(1, "admin", "admin@example.com", "adminpassword");
$person2 = new Person(2, "user", "user@example.com", "userpassword");
$person->print_user_info();