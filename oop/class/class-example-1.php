<?php

class PaymentGateway
{

    // properties
    public $sender = "PJJx098765";

    // constuctor
    public function __construct()
    {
    }

    // methods
    function confirm_receipt($msg)
    {
        echo $msg;
    }

    // destructor
    public function __destruct()
    {
        
    }
}
