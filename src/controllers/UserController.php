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
    
    // public function login($username, $pass)
    // {
    //     if($this->model->validateUser($username, $pass))
    //     {
    //         $this->system();
    //         $this->redirect('system');
    //     }else
    //     {
    //         $_SESSION['erro'][]  = "Dados Inválidos";
    //         $this->redirect('/src/index');
    //     }
    // }
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $username = $_POST['user'];
            $pass = $_POST['userPw'];
            $user = $this->model->validateUser($username, $pass);

            if ($user) {
                $_SESSION['user_id'] = $user['usuario_id'];
                $this->redirect('system');
            }else
            {
                $_SESSION['erro'][]  = "Dados Inválidos";
                $this->index();
            }
        }else{
            $this->index();
        }
    }

    public function createProjectScreen()
    {
        $users = $this->model->getAllUsers();
        $this->view('create-project', [
            'users' => $users
        ]);
    }
    
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

    public function editProjectView($id)
    {
        $projects = $this->model->editProjectView($id);
        $this->view('edit-projects', [
            'projects' => $projects
        ]);
    }

    function editProject($id, $title, $description, $dateI, $dateF)
    {
        if($this->model->editProject($id, $title, $description, $dateI, $dateF))
        {
            $_SESSION['success'] = "Projeto criado com sucesso!";
        }else
        {
            $_SESSION['erro'][]  = "Dados Inválidos";
        }
        
        $this->redirect('system');
    }
}
