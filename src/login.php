<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$username = $_POST['user'];
$pass = $_POST['userPw'];

(new UserController)->login($username, $pass);