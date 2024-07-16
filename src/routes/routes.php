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
    case '/src/logout':
        $controller = new UserController();
        $controller->logout();
        break;
    case '/src/home':
        $controller = new UserController();
        $controller->system();
        break;
    case '/src/create-projects':
        $controller = new UserController();
        $controller->createProjectScreen();
        break;
    case '/src/view-projects':
        $controller = new UserController();
        $controller->viewProject();
        break;
    case (preg_match('/\/edit-project\/(\d+)/', $request, $matches) ? true : false):
        $controller = new UserController();
        $controller->editProjectView($matches[1]);
        break;
    case (preg_match('/\/delete-project\/(\d+)/', $request, $matches) ? true : false):
        $controller = new UserController();
        $controller->deleteProject($matches[1]);
        break;
    case'/src/view-tasks':
        $controller = new UserController();
        $controller->viewTasks();
        break;
    case(preg_match('/\/edit-task\/(\d+)/', $request, $matches) ? true : false):
        $controller = new UserController();
        $controller->editTask($matches[1]);
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
