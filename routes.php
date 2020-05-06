<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/OverviewController.php',
    'credits' => 'app/Controllers/OverviewController.php',
    'addrental' => 'app/Controllers/AddRentalController.php',
    'editcredit' => 'app/Controllers/EditCreditController.php',
]);