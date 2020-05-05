<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'about' => 'app/Controllers/AboutController.php',
    'bier' => 'app/Controllers/BeerController.php',
    'spam' => 'app/Controllers/SpamController.php',
    'clown' => 'app/Controllers/ClownController.php',
    'pixel' => 'app/Controllers/PixelController.php',
    'todo' => 'app/Controllers/TodoController.php',
    'form' => 'app/Controllers/FormController.php',
    'validation' => 'app/Controllers/ValidationController.php',
    'game-ssp' => 'app/Controllers/GameSSPController.php',
    'game-wab' => 'app/Controllers/GameWABController.php',
    'form-js' => 'app/Controllers/FormValidateController.php',
    'task' => 'app/Controllers/TaskController.php',
    'addtask' => 'app/Controllers/AddTaskController.php',
    'edittask' => 'app/Controllers/EditTaskController.php',
    'updatetask' => 'app/Controllers/UpdateTaskController.php',
    'deletetask' => 'app/Controllers/DeleteTaskController.php',
]);