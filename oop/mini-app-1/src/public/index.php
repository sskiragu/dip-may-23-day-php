<?php

// include __DIR__ . "/" . "../app/PaymentGateway/stripe/Transaction.php";
// include __DIR__ . "/" . "../app/PaymentGateway/mpesa/Transaction.php";

spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    require $path;
});

use App\PaymentGateway\mpesa\Transaction;
use App\PaymentGateway\stripe\Transaction as StripeTransaction;

var_dump(new Transaction());