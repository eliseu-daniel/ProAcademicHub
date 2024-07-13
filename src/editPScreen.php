<?php
    require '../vendor/autoload.php';
    
    use src\controllers\UserController;
    
    $id = $_GET['id'];
    $controller = new UserController();
    $controller->editProjectView($id);
?>