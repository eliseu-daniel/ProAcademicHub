<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$controller = new UserController();
$controller->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $username = $_POST['user'];
    $pass = $_POST['userPw'];
    $controller->login($username, $pass);
}