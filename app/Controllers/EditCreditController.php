<?php

$db = new DbManager();
$creditPackages = $db->getCreditPackages();
$id = $_GET['id'];
$id = (int)$id;


try {
    if (!is_int($id)) {
        throw new Exception();
    }

    $credit = $db->getById($id);
    
    if($credit['id'] === null) {
        throw new Exception();
    }
} catch (Exception $e) {
    header("location: credits");
}

require 'app/Views/editcredit.view.php';