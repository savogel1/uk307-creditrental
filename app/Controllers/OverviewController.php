<?php

$db = new DbManager();
$creditrentals = $db->getAll();

require 'app/Views/overview.view.php';