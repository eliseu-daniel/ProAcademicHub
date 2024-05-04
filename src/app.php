<?php

require '../vendor/autoload.php';

use src\controllers\userController;

$controller = new userController();
$controller->index();