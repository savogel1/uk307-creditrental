<?php

$db = new DbManager();
$creditrentals = $db->getUnpaidCredits();
$creditPackages = $db->getCreditPackages();

function cmp($a, $b)
{
    return strcmp($a["creationDate"], $b["creationDate"]);
}

usort($creditrentals, "cmp");

require 'app/Views/overview.view.php';
