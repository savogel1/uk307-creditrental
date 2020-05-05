<?php

require 'core/bootstrap.php';

// Routing
require 'routes.php';

$uri = $_GET['uri'] ?? '';

require $router->parse($uri);