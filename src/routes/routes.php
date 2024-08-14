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
    case'/src/add-task':
        $controller = new UserController();
        $controller->addTasks();
        break;
    case(preg_match('/\/edit-task\/(\d+)/', $request, $matches) ? true : false):
        $controller = new UserController();
        $controller->editTask($matches[1]);
        break;
    case (preg_match('/\/delete-task\/(\d+)/', $request, $matches) ? true : false):
        $controller = new UserController();
        $controller->deleteTask($matches[1]);
        break;
    case'/src/add-member':
        $controller = new UserController();
        $controller->addMember();
        break;
    case'/src/delete-member':
        $controller = new UserController();
        $controller->deleteMember();
        break;
    case'/src/assign-task':
        $controller = new UserController();
        $controller->assignTask();
        break;
    case'/src/comments':
        $controller = new UserController();
        $controller->comments();
        break;
    case'/src/view-calendar':
        $controller = new UserController();
        $controller->viewCalendar();
        break;
    case'/src/progress-report':
        $controller = new UserController();
        $controller->progressReport();
        break;
    case'/src/performance-report':
        $controller = new UserController();
        $controller->performanceReport();
        break;
    case'/src/system-settings':
        $controller = new UserController();
        $controller->systemSettings();
        break;
    case'/src/manage-user':
        $controller = new UserController();
        $controller->manageUser();
        break;
    case'/src/suport':
        $controller = new UserController();
        $controller->suport();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
