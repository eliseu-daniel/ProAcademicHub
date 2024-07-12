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
            $this->redirect('system');
        }else
        {
            $_SESSION['erro'][]  = "Dados Inválidos";
            $this->redirect('/src/index');
        }
    }

    public function createProjectScreen()
    {
        $users = $this->model->getAllUsers();
        $this->view('create-project', [
            'users' => $users
        ]);
    }
    //testar
    public function createProject($title, $description, $dateI, $dateF, $teacher)
    {
        if($this->model->createProject($title, $description, $dateI, $dateF, $teacher))
        {
            $_SESSION['success'] = "Projeto criado com sucesso!";
        }else
        {
            $_SESSION['erro'][]  = "Dados Inválidos";
        }
        
        $this->redirect('system');

    }

    public function viewProject()
    {
        $projects = $this->model->viewProject();
        $this->view('view-projects', [
            'projects' => $projects
        ]);
    }
}
