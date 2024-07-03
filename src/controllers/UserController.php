<?php

namespace src\controllers;

use src\models\UserModel;

session_start();

class UserController extends Controller
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
    
    public function login($username, $pass)
    {
        if($this->model->validateUser($username, $pass))
        {
            $this->system();
            $this->redirect('/src/views/system.php');
        }else
        {
            $_SESSION['erro'][]  = "Dados Inválidos";
            $this->redirect('/src/index');
        }
    }
}
