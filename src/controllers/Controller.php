<?php

namespace src\controllers;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        require_once $_SERVER['DOCUMENT_ROOT'] . "/src/views/{$view}.php";
    }

    public function redirect($url)
    {
        header("Location:{$url}");
    }

    
    
    
}