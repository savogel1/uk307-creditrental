<?php

$db = new DbManager();
$creditrentals = $db->getAll();
$creditPackages = $db->getCreditPackages();

require 'app/Views/overview.view.php';
