<?php

namespace src\controllers;

use src\models\model;
use src\models\userModel;

class userController extends controller
{
    private $model;

    public function __construct()
    {
        $this->model = new model();
    }
    
    
    public function index()
    {
        $this->view('user/index');
    }
}