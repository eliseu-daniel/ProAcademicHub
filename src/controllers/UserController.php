<?php

namespace src\controllers;

use src\models\UserModel;

class UserController extends Controller
{
    private $model;

    public function __construct()
    {
        session_start();
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

    public function authenticate()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: /src/login");
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['user'];
            $pass = $_POST['userPw'];
            $user = $this->model->validateUser($username, $pass);

            if ($user) {
                $_SESSION['user_id'] = $user->usuario_id;
                header("Location: /src/home");
            } else {
                $_SESSION['erro'][]  = "Dados Inválidos";
                $this->index();
            }
        } else {
            $this->index();
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /src");
    }

    public function createProjectScreen()
    {
        $this->authenticate();
        $idGlobal = $_SESSION['user_id'];
        $users = $this->model->getAllUsers($idGlobal);
        $this->view('create-project', [
            'users' => $users
        ]);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['titulo2'];
            $description = $_POST['descricao'];
            $dateI = $_POST['dataInicio'];
            $dateF = $_POST['dataFim'];
            $teacher = $_POST['prof'];
            if ($this->model->createProject($title, $description, $dateI, $dateF, $teacher)) {
                $_SESSION['success'][] = "Projeto criado com sucesso!";
            } else {
                $_SESSION['erro'][]  = "Dados Inválidos";
            }
        }
    }

    public function viewProject()
    {
        $this->authenticate();
        $projects = $this->model->viewProject();
        $this->view('view-projects', [
            'projects' => $projects
        ]);
    }

    public function editProjectView($id)
    {
        $this->authenticate();
        $projects = $this->model->editProjectView($id);
        $this->view('edit-projects', [
            'projects' => $projects
        ]);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['titulo2'];
            $description = $_POST['descricao'];
            $dateI = $_POST['dataInicio'];
            $dateF = $_POST['dataFim'];
            if ($this->model->editProject($id, $title, $description, $dateI, $dateF)) {
                $_SESSION['success'][] = "Projeto criado com sucesso!";
                $projects = $this->model->editProjectView($id);
                $this->view('edit-projects', [
                    'projects' => $projects
                ]);
            } else {
                $_SESSION['erro'][]  = "Dados Inválidos";
            }
        }
    }

    public function deleteProject($id)
    {
        $this->authenticate();
        $this->model->deleteProject($id);
        $this->redirect('view-projects');
    }

    public function viewTasks()
    {
        $this->authenticate();
        $tasks = $this->model->viewTasks();
        $users = $this->model->getAllUsers($idGlobal);
        $this->view('view-tasks', [
            'tasks' => $tasks,
            'user' => $users
        ]);
    }

    public function editTask($id)
    {
        $this->authenticate();
        $idGlobal = $_SESSION['user_id'];
        $users = $this->model->getAllUsers($idGlobal);
        $tasks = $this->model->editTaskView($id);
        $this->view('edit-task', [
            'tasks' => $tasks,
            'users' => $users
        ]);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $titulo = $_POST['tarefa'];
            $aluno = $_POST['aluno2'];
            if ($this->model->editTask($id, $titulo, $aluno)) {
                $_SESSION['success'][] = "Projeto criado com sucesso!";
                $this->viewTasks();
            } else {
                $_SESSION['erro'][]  = "Dados Inválidos";
            }
        }
    }

    public function addTasks()
    {
        $this->authenticate();
        $idGlobal = $_SESSION['user_id'];
        $users = $this->model->getAllUsers($idGlobal);
        $projects = $this->model->getAllProjects($idGlobal);
        $this->view('add-task', [
            'users' => $users,
            'tasks' => $projects
        ]);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo2'];
            $descricao = $_POST['descricao'];
            $status = $_POST['status'];
            $dataInicio = $_POST['dataInicio'];
            $dataFim = $_POST['dataFim'];
            $projeto = $_POST['projeto'];
            $aluno = $_POST['aluno1'];
            if ($this->model->addTasks($titulo, $descricao, $status, $dataInicio, $dataFim, $projeto, $aluno)) {
                // $_SESSION['success'][] = "Projeto criado com sucesso!";
                $this->view('view-tasks', [
                    'tasks' => $tasks,
                    'user' => $users
                ]);
            } else {
                $_SESSION['erro'][]  = "Dados Inválidos";
            }
        }
    }

    public function deleteTask($id)
    {
        $this->authenticate();
        $this->model->deleteTask($id);
        $this->redirect('view-tasks');
    }

    public function addMember()
    {
        $this->authenticate();
        $idGlobal = $_SESSION['user_id'];
        $users = $this->model->getAllUsers($idGlobal);
        $member = $this->model->getAllProjects($idGlobal);
        $this->view('add-member', [
            'users' => $users,
            'tasks' => $member
        ]);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $projeto = $_POST['projeto'];
            if ($this->model->addMember($nome, $projeto)) {
                $this->addMember();
            }
        }
    }

    // dar uma olhada nessa bagaça e refazer a parte de puxar os usuarios
    public function deleteMember()
    {
        $this->authenticate();
        $idGlobal = $_SESSION['user_id'];
        $users = $this->model->getAllUsers($idGlobal);
        $member = $this->model->getAllProjects($idGlobal);
        $this->view('delete-member', [
            'users' => $users,
            'tasks' => $member
        ]);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['nome'];
            if ($this->model->deleteMember($id)) {
                $this->addMember();
            }
        }
    }

    public function assignTask()
    {
        $this->authenticate();
        $this->view('assign-task');
        //terminar a tela view
    }

    public function comments()
    {
        $this->authenticate();
        $this->view('comments');
        //terminar a tela view
    }  

    public function viewCalendar()
    {
        $this->authenticate();
        $this->view('view-calendar');
        //terminar
    }

    public function progressReport()
    {
        $this->authenticate();
        $this->view('progress-report');
        //terminar
    }

    public function performanceReport()
    {
        $this->authenticate();
        $this->view('performance-report');
        //terminar
    }

    public function systemSettings()
    {
        $this->authenticate();
        $this->view('system-settings');
        //terminar
    }

    public function manageUser()
    {
        $this->authenticate();
        $this->view('manage-user');
        //terminar
    }

    public function suport()
    {
        $this->authenticate();
        $this->view('suport');
        //terminar
    }
}
