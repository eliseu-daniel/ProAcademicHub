<?php

use src\models\userModel;

require 'userModel.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$username = $_POST['user'];
$pass = $_POST['userPw'];

$authModel = new userModel();

switch($action)
{
    case 'login':
        $authModel->validateUser($username, $pass);
            break;
    default:
        header('Location: ../app.php');
        exit;
}