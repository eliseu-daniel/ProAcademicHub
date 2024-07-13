<?php

require '../vendor/autoload.php';

use src\controllers\UserController;

$controller = new UserController();

$id = $_GET['id'];
$title = $_POST['titulo2'];
$description = $_POST['descricao'];
$dateI = $_POST['dataInicio'];
$dateF = $_POST['dataFim'];
$controller->editProject($id, $title, $description, $dateI, $dateF);