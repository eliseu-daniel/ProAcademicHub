<?php

namespace src\controllers;

class controller
{
    public function view($view, $data = [])
    {
        extract($data);
        require_once $_SERVER['DOCUMENT_ROOT'] . "/src/views/{$view}.php";
    }




}