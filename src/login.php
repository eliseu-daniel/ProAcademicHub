<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$controller = new UserController();

$username = $_POST['user'];
$pass = $_POST['userPw'];

$controller->login($username, $pass);
