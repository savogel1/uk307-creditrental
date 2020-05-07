<?php

$db = new DbManager();
$creditrentals = $db->getAll();
$creditPackages = $db->getCreditPackages();

foreach ($creditrentals as $nr => $credit) {
    if ($credit["status"] === "1") {
        unset($creditrentals[$nr]);
    }
}

function cmp($a, $b)
{
    return strcmp($a["creationDate"], $b["creationDate"]);
}

usort($creditrentals, "cmp");

require 'app/Views/overview.view.php';
