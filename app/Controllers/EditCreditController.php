<?php

$db = new DbManager();
$creditPackages = $db->getCreditPackages();

try {
    $credit = $db->getById($_GET['id']);
} catch (Exception $e) {
    echo 'Fehler aufgetreten! Mögliche Ursache: Ungültige ID eingegeben!';
}

require 'app/Views/editcredit.view.php';