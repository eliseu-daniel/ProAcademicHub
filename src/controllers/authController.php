<?php

use src\controllers\controller;

require_once 'controller.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$authController = new controller();

switch($action)
{
    case 'loggout':
        $authController->loggout();
        break;
    default:
        header('Location: ../app.php');
        exit;
}