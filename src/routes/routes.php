<?php

use src\controllers\UserController;

$request = $_SERVER['REQUEST_URI'];

switch($request)
{
    case '/src':
    case '/src/login':
        $controller = new UserController();
        $controller->login();
        break;
    case '/src/create-projects':
        $controller = new UserController();
        $controller->createProjectScreen();
        break;
    case '/src/view-projects':
        $controller = new UserController();
        $controller->viewProject();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
