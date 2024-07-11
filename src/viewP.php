<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$controller = new UserController();
$controller->viewProject();