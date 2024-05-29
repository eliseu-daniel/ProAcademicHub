<?php

namespace src\controllers;

use src\models\userModel;

class userController extends controller
{
    private $model;

    public function __construct()
    {
        $this->model = new userModel();
    }
    
    
    public function index()
    {
        $this->view('index');
    }

    public function system()
    {
        $this->view('system');
    }
}