<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$controller = new UserController();

$title = $_POST['titulo2'];
$description = $_POST['descricao'];
$dateI = $_POST['dataInicio'];
$dateF = $_POST['dataFim'];
$teacher = $_POST['prof'];
$controller->createProject($title, $description, $dateI, $dateF, $teacher);

