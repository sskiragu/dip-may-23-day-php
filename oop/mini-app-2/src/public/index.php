<?php

spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    require $path;
});

// use App\Admin\Admin;
// use App\Customer\Customer;

// $admin = new Admin(1, "john", "john@gmail.com", "123");

// $admin->upload_product();

// echo "<br>";

// $customer = new Customer(1, "mitchelle", "mitchelle@gmail.com", "123");
// $customer->view_product();

include __DIR__ . "/" . "../views/products.php";