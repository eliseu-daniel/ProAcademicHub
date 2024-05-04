<?php

namespace src\controllers;

class controller
{
    public function view($view)
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/src/views/{$view}.php";
    }




}