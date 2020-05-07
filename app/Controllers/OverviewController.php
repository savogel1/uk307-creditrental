<?php

$db = new DbManager();
$creditrentals = $db->getUnpaidCredits();
$creditPackages = $db->getCreditPackages();

require 'app/Views/overview.view.php';
