<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/OverviewController.php',
    'credits' => 'app/Controllers/OverviewController.php',
    'addcredit' => 'app/Controllers/AddCreditController.php',
    'editcredit' => 'app/Controllers/EditCreditController.php',
    'insertcredit' => 'app/Controllers/InsertCreditController.php',
    'updatecredit' => 'app/Controllers/UpdateCreditController.php',
]);
